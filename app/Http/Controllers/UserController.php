<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\EmailAlert;
use App\Models\FavouriteAd;
use App\Models\Product;
use App\Models\ParentCategory;
use App\Models\OurCategory;
use App\Models\Store;

use DB;
use Session;
use Redirect;
use Mail;
use Str;

use App\Mail\NotifyMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{


	public function do_registration(Request $request){

		$validator = Validator::make($request->all(),[
           
            'email' => 'required|email|unique:users',
            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);


        if ($validator->fails()) {

        	return Redirect::back()->withErrors($validator)->withInput();
          
        }

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->display_name = ucfirst(substr($request->first_name, 0,1)).' '.ucfirst(substr($request->last_name, 0,1));
        $request->gender ? $user->gender = $request->gender  : "";
        $request->date_of_birth ? $user->date_of_birth = $request->date_of_birth  : "";
        $request->city ? $user->city = $request->city  : "";
        $request->street_address ? $user->street_address = $request->street_address  : "";
        $request->state ? $user->state = $request->state  : "";
        $request->zip_code ? $user->zip_code = $request->zip_code  : "";
        $request->country ? $user->country = $request->country  : "";

        
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
       	$user->is_active = 1;
        $user->role = 'User';

      
        if($user->save()){

          //Send Email
          $data['title'] = "Thanks for visiting Dress Ads.";
          $data['name'] = $user->first_name.' '.$user->last_name;
          $data['type'] = "1";
          $data['subject'] = "Account Registration";
          
          $res= Mail::to($request->email)->send(new NotifyMail($data));
         
          Session::flash('success_message','Registration successfull. You can login now.');
          
          return Redirect::to('/login');

        }else{

        	Session::flash('success_message','Failed to complete the registration process.');
            return Redirect::back()->withInput();
        }

	}


	public function do_login(Request $request){

		 $validator = Validator::make($request->all(),[
           
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);


        if ($validator->fails()) {

        	return Redirect::back()->withErrors($validator)->withInput();
          
        }

        $credentials = request(['email','password']);
        
        if (!Auth::attempt($credentials)) {
           Session::flash('danger','Invalid Credentials!');
           return Redirect::back();
        }

        $user = User::where('email',$request->email)->where('role','User')->first();
       

        if(!$user){

            Session::flash('danger','Email or password is incorrect.');
            return Redirect::back();
        }else{

        	Session::put('user',$user);
        	return Redirect::to('/home');
        }
	}

	public function show_login(Request $request){
		
		return view('users.login');
	}

	public function show_register(Request $request){

		return view('users.register');
	}

  public function forget_password(Request $request){

    return view('users.forgot_password');
  }

  public function reset_link(Request $request){

      $user = [];
      if($request->reset_token && $request->reset_token !=""){

        $check = User::where('is_active',1)->where('role','User')->where('reset_token', $request->reset_token)->first();
        
        if($check && isset($check->id)){
          
          $user = $check;
          Session::flash('success','Set a new Password for your account.');
        
        } else {

          Session::flash('danger','Reset link is invalid.');
          return Redirect::to('/login');
        }

      }else{

        Session::flash('danger','Reset link is invalid or expired.');
        return Redirect::to('/login');
      }

      return view('users.new_password',['user' => $user]);
  }

  public function change_password(Request $request){

     $validator = Validator::make($request->all(),[
           
          'email' => 'required|email',
      ]);


      if ($validator->fails()) {

        return Redirect::back()->withErrors($validator)->withInput();
        
      }

      $email = User::where('email',$request->email)->first();

      if($email && isset($email->id)){

        $email->reset_token = Str::random(25);
        
        $link = url('/reset_link/'.$email->reset_token);

        $date_now = date('Y-m-d H:i:s');

        $expiry = date('Y-m-d H:i:s',strtotime($date_now." +1 day"));

        $email->reset_token_expiry = $expiry;

        if($email->save()){

          $data['title'] = "Thanks for visiting Dress Ads.";
          $data['name'] = $email->first_name.' '.$email->last_name;
          $data['type'] = "3";
          $data['subject'] = "Password Reset";
          $data['link'] = $link;  

          $res= Mail::to($request->email)->send(new NotifyMail($data));
         

          Session::flash('success_message','An email with reset link has been sent on '.$request->email);
          
          return Redirect::to('/login');

        }else{
           Session::flash('danger','Problem in sending you reset link!');
            return Redirect::back();
        }

      }else{

         Session::flash('warning','Email '.$request->email.' is not registered');
            return Redirect::back();

      }


  }

  public function update_password(Request $request){

    if($request->uid &&  $request->password && $request->password !="" && $request->password_confirmation && $request->password_confirmation !=""){

          if($request->password != $request->password_confirmation){

            Session::flash('danger','Password and Confirm Password does not match!');
            return Redirect::back();
          
          }

          $user = User::find($request->uid);

          if($user){
            
            $user->password = bcrypt($request->password);
            Session::flash('success',"Password updated, you can login now!");
            
            $user->reset_token = "";
            $user->reset_token_expiry = "";
            $user->save();

            return redirect('/login');
          
          }else{
            Session::flash('danger','You are not authorized!');
            return Redirect::login();
          }
          bcrypt($request->password);
    }else{
      Session::flash('danger','Password and Confirm Password cannot be empty!');
            return Redirect::back();
    }

  }

	public function account(Request $request){

		if(!Session::has('user')){

			return Redirect::to('/login');
		}else{

			$favourites = FavouriteAd::where('user_id',Session::get('user')->id)->paginate(2);

			$account =  Session::get('user');
			
      $email_alerts = EmailAlert::where('email_address', Session::get('user')->email)->paginate(2);

      return view('users.account',[
        'account' => $account,
        'favourites' => $favourites,
        'email_alerts' => $email_alerts,
        'active' => 'account'
      ]);
		}
	}


	public function account_update(Request $request){

		$validator = Validator::make($request->all(),[

            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'gender' => 'required',
            'date_of_birth' => 'required',
        ]);
 

        if ($validator->fails()) {

        	return Redirect::back()->withErrors($validator)->withInput();
          
        }

        if(!$request->update_id){
        	return Redirect::to('/account');
        }

        $user = User::find($request->update_id);


        if(!$user){

        	Session::flash('warning','Account Not Found!');
        	return Redirect::to('/account');
        }


        $request->first_name && $request->first_name !="" ? 
        	$user->first_name = $request->first_name :  "";
        
        $request->last_name && $request->last_name !="" ? 
        	$user->last_name = $request->last_name :  "";
        
        $request->date_of_birth && $request->date_of_birth !="" ? 
        	$user->date_of_birth = $request->date_of_birth :  "";

        $request->gender && $request->gender !="" ? 
        	$user->gender = $request->gender :  "";

        $request->state && $request->state !="" ? 
        	$user->state = $request->state :  "";

        $request->city && $request->city !="" ? 
        	$user->city = $request->city :  "";

        $request->zip_code && $request->zip_code !="" ? 
        	$user->zip_code = $request->zip_code :  "";

        $request->street_address && $request->street_address !="" ? 
        	$user->street_address = $request->street_address :  "";

        $result = $user->save();

        if($result && $user->id){ 

        	$user = User::find($user->id);
        	Session::put('user',$user); 
        }


        if($request->current_password && $request->current_password !="" &&  $request->password && $request->password !="" && $request->password_confirmation && $request->password_confirmation !=""){

        	if($request->password != $request->password_confirmation){

        		Session::flash('danger','Password and Confirm Password!');
        		return Redirect::back();
        	
        	}

        	if(!Hash::check($request->current_password, $user->password)){

	          Session::flash('danger','Current Password Not Correct!');
        		return Redirect::back();
	        }else{

	             $user->password = bcrypt($request->password);
	             if($user->save()){
	          
	              Session::flash('success','Account Information && Password Updated!');
        			  return Redirect::back();
	            }else{

	            	if($result){

	                Session::flash('success','Account Information Updated!<br/>
	                		Unable To Update Password.');
	                return Redirect::back();
	            	}else{

	            		Session::flash('danger','Unable to Update the Password');
        				  return Redirect::back();
	            	}
	            }
	        }
		}else{

			Session::flash('success','Account Information Updated!');
      return Redirect::back();
		}

  }

   public function logout(Request $request){

   		Session::flush('user');

   		return Redirect::to('login');
   }


   public function add_favourite(Request $request){

   		if(!$request->product_id){

   			return false;
   		}

   		if(!Session::has('user')){

   			return 'unauthorized';
   		}

   		$user_id = Session::get('user')->id;


   		$data['user_id'] = $user_id;
   		$data['product_id'] = $request->product_id;

   		$where['user_id'] = $user_id;
   		$where['product_id'] = $request->product_id;

   		$result = FavouriteAd::updateOrCreate($where, $data);

   		if($result){
   			return true;
   		}else{
   			return false;
   		}
   }


   public function remove_favourite(Request $request){

   		if(!$request->product_id){

   			return false;
   		}

   		if(!Session::has('user')){

   			return 'unauthorized';
   		}

   		$user_id = Session::get('user')->id;


   		$where['user_id'] = $user_id;
   		$where['product_id'] = $request->product_id;

   		$result = FavouriteAd::where($where)->delete();

   		if($result){

   			return true;
   		}else{
   			return false;
   		}
   }


   public function favourite_list(Request $request){

   		if(!Session::has('user')){
   			return redirect('/login');
   		}

   		$email_alerts = EmailAlert::where('email_address', Session::get('user')->email)->orderBy('created_at',"DESC")->paginate(2);

      $favourites = FavouriteAd::with('product')->where('user_id',Session::get('user')->id)->orderBy('created_at',"DESC")->paginate(2);

   		return view('users.favourite_list',[
   			"favourites" => $favourites,
        "email_alerts" => $email_alerts,
        'active' => 'favourite_list'
   		]);
   }


    public function delete_favourite(Request $request){

   		if(!Session::has('user')){
   			return redirect('/login');
   		}

   		$result = FavouriteAd::where('user_id', Session::get('user')->id)->where('id', $request->id)->delete();

   		if($result){
   			Session::flash('success','Removed from favourites!');
   			return redirect('/favourite_list');
   		}else{
   			Session::flash('danger','Unable to remove from favourite');
   			return redirect('/favourite_list');
   		}
    }


  public function  email_alerts(Request $request){

    if(!Session::has('user')){

      return redirect('/login');
    }

    $email_alerts = EmailAlert::with('product','our_category','parent_category')->where('email_address', Session::get('user')->email)->orderBy('created_at',"DESC")->paginate(2);

    $favourites = FavouriteAd::with('product')->where('user_id',Session::get('user')->id)->orderBy('created_at',"DESC")->paginate(2);

    return view('users.email_alerts',[
      'favourites' => $favourites,
      'email_alerts' => $email_alerts ,
      'active' => 'email_alerts'
    ]);

  }

  public function delete_alert_email(Request $request){

      if(!Session::has('user')){
        return redirect('/login');
      }

      $result = EmailAlert::with('product')->where('id', $request->id)->delete();

      if($result){
        Session::flash('success','Removed from email alerts!');
        return redirect('/email_alerts');
      }else{
        Session::flash('danger','Unable to remove from email alerts!');
        return redirect('/email_alerts');
      }
    }


    public function get_alert_modal_content(Request $request){

      if($request->type == 1 && $request->id && $request->id != ""){

        $product = Product::find($request->id);
        return $html = view('contents.email_alert_content', [ 'product' => $product, 'type' => $request->type ])->render();
      
      }elseif($request->type == 2 && $request->nature && $request->id && $request->id != "" && isset($request->nature)){


        $parent_cateogry = [];
        $our_category = [];

        if($request->nature == "parent_category_id"){
          
          $parent_category = ParentCategory::find($request->id);

        }elseif($request->nature == "our_category_id"){

          $our_category = OurCategory::find($request->id);
          if($our_category){
            $parent_category = ParentCategory::find($our_category->parent_category_id);
          }
        }

        return $html = view('contents.email_alert_content', [ 'our_category' => $our_category, 'parent_category' => $parent_category, 'type' => $request->type ])->render();

      }elseif($request->type == 3 && $request->id && $request->id !=""){

        $store = Store::find($request->id);

        return $html = view("contents.email_alert_content", [ "store" => $store, "type" => $request->type ])->render();

      }else{
        
        return "<h4>Unable to configure alert for this product</h4>";
      
      }

    }

    public function edit_email_alert(Request $request){


     $validator = Validator::make($request->all(),[
           
          'alert_nature' => 'required',
          'alert_status' => 'required',
      ]);


      if ($validator->fails()) {

        return Redirect::back()->withErrors($validator)->withInput();
        
      }

      if($request->update_id && $request->update_id !=""){

        $data= [];
        $data['alert_nature'] = $request->alert_nature;
        $data['alert_status'] = $request->alert_status;

        $result = EmailAlert::where('id',$request->update_id)->update($data);

        if($result){

          Session::flash('success',"Email Alert Updated!");
          return Redirect::back();
        }else{
          Session::flash('danger',"Fail To Update Email Alert!");
          return Redirect::back();
        }

      }else{
        Session::flash('danger',"Unable To Update Email Alert!");
        return redirect('/email_alerts');
      }
      $data = $request->all();
      dd($data);
    }


    public function save_alert(Request $request){


      if($request->product_id && $request->alert_email){

        $check_sql = EmailAlert::query();
        
        $check_sql->where('product_id', $request->product_id);
        $check_sql->where('email_address', $request->alert_email);

        if($check_sql->count()<1){

          if($request->user_id && $request->user_id !=""){

            $email_alert = new EmailAlert;

            $email_alert->user_id = $request->user_id;
            $email_alert->product_id = $request->product_id;
            $email_alert->alert_type = $request->alert_type;
            $email_alert->email_address = Session::get('user')->email;
            $email_alert->name = Session::get('user')->first_name.' '.Session::get('user')->last_name;
            
            if($email_alert->save()){
              return "true";
            }else{
              return "false";
            }

          }else{

            
            $data =[];

            $data['subject'] = "Account Created";

            $existing_user = User::where('email',$request->alert_email)->first();

            $user =  null;

            if($existing_user && isset($existing_user->email)){

               $email_alert = new EmailAlert();
               $email_alert->user_id = $existing_user->id;
                $email_alert->product_id = $request->product_id;
                $email_alert->alert_type = $request->alert_type;
                $email_alert->email_address = $request->alert_email;  

              if($email_alert->save()){
                return "true";
              }else{
                return "false";
              }
            }else{

              $email_alert = new EmailAlert();
              $email_alert->product_id = $request->product_id;
              $email_alert->alert_type = $request->alert_type;
              $email_alert->email_address = $request->alert_email;  

              if($email_alert->save()){

                $user = new User();

                $user->email = $request->alert_email;

                $password = Str::random(10);
                $user->is_active = 1;
                $user->password = bcrypt($password);
                $user->role = 'User';


                
                if($user->save()){

                  $email_alert->user_id = $user->id;
                  $email_alert->save();

                  $data['email'] = $user->email;
                  $data['password'] = $password;
                  $data['title'] = "Thanks for visiting Dress Ads.";
                  $data['name'] = "";
                  $data['type'] = "2";

                  $res= Mail::to($request->alert_email)->send(new NotifyMail($data));
                 

                  return "registered";

                }else{

                  return "not-registered";
                }

              }else{
                   
                return 'false';
              }
             
            }

          }

        }else{

          return "already";
        }

      }elseif($request->parent_category_id && $request->alert_email){

        $check_sql = EmailAlert::query();
        
        $check_sql->where('parent_category_id', $request->parent_category_id);
        
        if($request->our_category_id && $request->our_category_id != ""){
          $check_sql->where('our_category_id', $request->our_category_id);
        }

        $check_sql->where('email_address', $request->alert_email);

        if($check_sql->count()<1){

          if($request->user_id && $request->user_id !=""){

            $email_alert = new EmailAlert;

            $email_alert->user_id = $request->user_id;

            $email_alert->parent_category_id = $request->parent_category_id;
            
            isset($request->our_category_id)  ? $email_alert->our_category_id = $request->our_category_id : "";

            $email_alert->alert_type = $request->alert_type;
            $email_alert->email_address = Session::get('user')->email;
            $email_alert->name = Session::get('user')->first_name.' '.Session::get('user')->last_name;
            
            if($email_alert->save()){
              return "true";
            }else{
              return "false";
            }

          }else{

            
            $data =[];

            $data['subject'] = "Account Created";

            $existing_user = User::where('email',$request->alert_email)->first();

            $user =  null;

            if($existing_user && isset($existing_user->email)){

              $email_alert = new EmailAlert();
              $email_alert->user_id = $existing_user->id;

              $email_alert->parent_category_id = $request->parent_category_id;
            
              isset($request->our_category_id)  ? $email_alert->our_category_id = $request->our_category_id : "";

              $email_alert->alert_type = $request->alert_type;
              $email_alert->email_address = $request->alert_email;  

              if($email_alert->save()){
                return "true";
              }else{
                return "false";
              }
            }else{

              $email_alert = new EmailAlert();

              $email_alert->parent_category_id = $request->parent_category_id;
            
              isset($email_alert->our_category_id)  ? $email_alert->our_category_id = $request->our_category_id : "";

              $email_alert->alert_type = $request->alert_type;
              $email_alert->email_address = $request->alert_email;  

              if($email_alert->save()){

                $user = new User();

                $user->email = $request->alert_email;

                $password = Str::random(10);
                $user->is_active = 1;
                $user->password = bcrypt($password);
                $user->role = 'User';


                
                if($user->save()){

                  $email_alert->user_id = $user->id;
                  $email_alert->save();

                  $data['email'] = $user->email;
                  $data['password'] = $password;
                  $data['title'] = "Thanks for visiting Dress Ads.";
                  $data['name'] = "";
                  $data['type'] = "2";

                  $res= Mail::to($request->alert_email)->send(new NotifyMail($data));
                 

                  return "registered";

                }else{

                  return "not-registered";
                }

              }else{
                   
                return 'false';
              }
             
            }

          }

        }else{

          return "already";
        }

      }elseif(isset($request->store_id) && $request->store_id && $request->alert_email){

        $check_sql = EmailAlert::query();
        
        $check_sql->where('store_id', $request->store_id);
        $check_sql->where('email_address', $request->alert_email);

        if($check_sql->count()<1){

          if($request->user_id && $request->user_id !=""){

            $email_alert = new EmailAlert;

            $email_alert->user_id = $request->user_id;
            $email_alert->store_id = $request->store_id;
            $email_alert->alert_type = $request->alert_type;
            $email_alert->email_address = Session::get('user')->email;
            $email_alert->name = Session::get('user')->first_name.' '.Session::get('user')->last_name;
            
            if($email_alert->save()){
              return "true";
            }else{
              return "false";
            }

          }else{

            
            $data =[];

            $data['subject'] = "Account Created";

            $existing_user = User::where('email',$request->alert_email)->first();

            $user =  null;

            if($existing_user && isset($existing_user->email)){

               $email_alert = new EmailAlert();
               $email_alert->user_id = $existing_user->id;
                $email_alert->store_id = $request->store_id;
                $email_alert->alert_type = $request->alert_type;
                $email_alert->email_address = $request->alert_email;  

              if($email_alert->save()){
                return "true";
              }else{
                return "false";
              }
            }else{

              $email_alert = new EmailAlert();
              $email_alert->store_id = $request->store_id;
              $email_alert->alert_type = $request->alert_type;
              $email_alert->email_address = $request->alert_email;  

              if($email_alert->save()){

                $user = new User();

                $user->email = $request->alert_email;

                $password = Str::random(10);
                $user->is_active = 1;
                $user->password = bcrypt($password);
                $user->role = 'User';


                
                if($user->save()){

                  $email_alert->user_id = $user->id;
                  $email_alert->save();

                  $data['email'] = $user->email;
                  $data['password'] = $password;
                  $data['title'] = "Thanks for visiting Dress Ads.";
                  $data['name'] = "";
                  $data['type'] = "2";

                  $res= Mail::to($request->alert_email)->send(new NotifyMail($data));
                 

                  return "registered";

                }else{

                  return "not-registered";
                }

              }else{
                   
                return 'false';
              }
             
            }

          }

        }else{

          return "already";
        }

      }
    }

}