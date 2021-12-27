@extends('layouts.app')

@section('content')

<div id="container">
  <div class="container">
    <!-- Breadcrumb Start-->
    <ul class="breadcrumb">
      <li><a href="/"><i class="fa fa-home"></i></a></li>
      <li><a href="/account">Email Alerts</a></li>
    </ul>
    <!-- Breadcrumb End-->
    <div class="row">
      <!--Middle Part Start-->
      <div id="content" class="col-sm-12">
       
        <div class="row">
          <div class="col-sm-3">
           @include('users.my_account_bar')
         </div>
         <div class="col-sm-9">

          @foreach (['danger', 'success','warning'] as $status)
            @if(Session::has($status))
            <p class="alert alert-{{$status}} alert-dismissible" role="alert">{{ Session::get($status) }} <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></p>
            @endif
          @endforeach

          <h2 class="subtitle">
            Email Alerts
            @if($email_alerts->total()>0)
              ({{$email_alerts->total()}})
            @endif
          </h2>

          <div  class="row">
            <div class="col-md-12 ">
              <div class="table-responsive">

                @if($email_alerts)
                <table class="table table-stripped" style="    border: 1px solid #dee2e6;!important; ">
                  <thead style="background: #283048;color:white;vertical-align: middle">
                    <tr>
                      <td class="text-center">Alert Type</td>
                      <td class="text-left">Alert For</td>
                      <td class="text-center">Email Address</td>
                      <td class="text-center">Nature</td>
                      <td class="text-center">Status</td>
                      <td class="text-right">Date Added</td>           
                      <td>Edit</td>
                      <td>Remove</td>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($email_alerts as $alert_email)
                      <tr>

                        <td class="text-left">
                            {{$alert_email->alert_type}}
                        </td>
                        
                        <td class="text-center">
                          @if($alert_email->alert_type == "Product")
                            
                            {{$alert_email->product ? $alert_email->product->name: ""}}
                          
                          @elseif($alert_email->alert_type == "Category")
                          
                            @if($alert_email->parent_category && $alert_email->parent_category->parent_category_name !="")
                              
                              {{$alert_email->parent_category->parent_category_name}}
                            
                            @endif

                            @if($alert_email->our_category && $alert_email->our_category->category_name !="")
                              
                              {{$alert_email->our_category->category_name}}
                            
                            @endif
                         
                          @elseif($alert_email->alert_type == "Store")

                            {{$alert_email->store->store_name}}
                          
                          @endif
                        </td>
                        
                        <td class="text-center">{{$alert_email->email_address}}</td>
                        
                        <td class="text-center">{{$alert_email->alert_nature}}</td>

                        <td >

                          @if($alert_email->alert_status == 'Active')
                            <span class="badge badge-success"> 
                              {{$alert_email->alert_status}}
                            </span>
                          @else
                             <span class="badge badge-danger"> 
                              {{$alert_email->alert_status}}
                            </span>
                          @endif
                         
                        </td>

                        <td class="text-right">{{date('F d, Y h:i:sa',strtotime($alert_email->created_at))}}</td>

                      

                        <td class="text-center">
                          <a class="btn btn-warning" title="" data-toggle="tooltip"  href="#edit_alert{{$alert_email->id}}" onclick="showAlertModal('{{$alert_email->id}}')" data-original-title="Edit">
                            <i class="fa fa-edit"></i>
                          </a>

                          <div class="modal fade" id="edit_alert{{$alert_email->id}}" role="document">
                            <div class="modal-dialog modal-md">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2 class="modal-title">Edit Alert</h2>
                                </div>
                                 <form class="form-horizontal" action="{{route('edit_email_alert')}}" method="post">
                                    
                                <div class="modal-body" >
                                 
                                    <div class="form-group required">
                                      <label class="col-sm-2 control-label">Status</label>
                                      <div class="col-sm-4">
                                       
                                         <label class="radio-inline">
                                            <input type="radio" value="Active" name="alert_status"  @if($alert_email->alert_status == 'Active') checked='true'  @endif >
                                            Active
                                        </label>
                                          <label class="radio-inline">
                                            <input type="radio" value="Inactive" name="alert_status" @if($alert_email->alert_status == 'Inactive') checked='true'  @endif >
                                            Inactive
                                        </label>
                                      
                                      </div>
                                    </div>


                                      <div class="form-group required">
                                      <label class="col-sm-2 control-label">Nature</label>
                                      <div class="col-sm-10">
                                       
                                        <select class="form-control col-md-6" name="alert_nature">
                                          <option value="Daily"
                                          @if($alert_email->alert_nature == "Daily") selected="selected" @endif
                                          >Daily</option>
                                          <option value="Weekly"
                                           @if($alert_email->alert_nature == "Weekly") selected="selected" @endif
                                          >Weekly</option>
                                        </select>
                                      
                                      </div>
                                    </div>
                                    <input type="hidden" name="update_id" value='{{$alert_email->id}}' />
                                   
                                       {!! csrf_field() !!}
                                </div>
                                <div class="modal-footer">
                                  <input type="button" onclick="hideAlertEditModal('{{$alert_email->id}}')" class="btn btn-default" value="Close">
                                   <input class="btn btn-primary" type="submit" name="submit" value="Submit"/>
                                </div>
                                  </form> 

                              </div>
                            </div>
                          </div>
                      
                        </td>

                        <td class="text-center">
                          <a class="btn btn-danger" title="" data-toggle="tooltip" href="{{route('delete_alert_email',['id' => $alert_email->id])}}" data-original-title="Remove alert email">
                            <i class="fa fa-remove"></i>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                     
                  </tbody>
                </table>
                
                

                @else
                  <b>
                    No email alerts found.
                  </b>
                @endif
              </div>

              @if($email_alerts && $email_alerts->total() >0)
                <br/>
                <div class="row">

                  <div class="col-sm-6 ">
                    <b>
                     
                      Showing 
                      @if($email_alerts->currentPage() == 1)
                        1
                      @else
                        {{($email_alerts->currentPage()-1) * $email_alerts->perPage()}}
                      @endif

                       to {{$email_alerts->currentPage() * $email_alerts->perPage()}} out of {{$email_alerts->total()}} items
                    </b> 
                  </div>

                  <div class="col-sm-6 text-right">
                    {{$email_alerts && $email_alerts->total() >0 ? $email_alerts->withQueryString()->links('pagination::bootstrap-4') : ""}}
                  </div>
             
                  
                </div>
               <br/>
              @endif

            </div>

          </div>

          

        </div>
      </div>

    </div>    
  </div>
</div>
<script type="text/javascript">
  function hideAlertEditModal(id){
    $("#edit_alert"+id).modal('hide');
  }
  function  showAlertModal(id){
    $("#edit_alert"+id).modal('show');
  }
</script>
@endsection