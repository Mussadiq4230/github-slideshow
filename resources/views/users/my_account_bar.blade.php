<link rel="stylesheet" type="text/css"  href="{{asset('css/account-bar.css')}}" />

<link rel="stylesheet" type="text/css"  href="{{asset('css/user.css')}}" />
<?php 
$account = Session::get('user') ? Session::get('user') : Redirect::to('/login');
?>
<center>
	<p style="height: 100px;width: 100px;border-radius: 50px;border: 5px solid #444242; font-size: 40px; color: #283048;font-weight: bold;padding: 30px 10px 10px 10px; background:white ">

		<span style="vertical-align: middle;text-align: center;">
			{{ucfirst(substr($account->first_name,0,1))}}{{ucfirst(substr($account->last_name,0,1))}}
		</span>
	</p>

	<h1 class="subtitle">
		<b>
			{{$account->first_name.' '.$account->last_name}}
		</b>
	</h1>
</center>
<div
	class="nav flex-column nav-pills "
	id="v-pills-tab"
	role="tablist"
	aria-orientation="vertical"
	style="margin-bottom: 10px"
>
	<a
	class="nav-link <?php echo $active == 'account' ? 'active' : ''; ?>"
	id="v-pills-home-tab"
	data-mdb-toggle="pill"
	href="/account"
	role="tab"
	aria-controls="v-pills-home"
	aria-selected="true"
	>My Account</a
	>
	<a
	class="nav-link <?php echo $active == 'favourite_list' ? 'active' : ''; ?>"
	id="v-pills-profile-tab"
	data-mdb-toggle="pill"
	href="/favourite_list"
	role="tab"
	aria-controls="v-pills-profile"
	aria-selected="false"
	>My Favourites
	@if(isset($favourites) && $favourites->total()>0)
		({{$favourites->total()}})
	@endif
	</a
	>
	<a
	class="nav-link <?php echo $active == 'email_alerts' ? 'active' : ''; ?>"
	id="v-pills-messages-tab"
	data-mdb-toggle="pill"
	href="/email_alerts"
	role="tab"
	aria-controls="v-pills-messages"
	aria-selected="false"
	>Email Alerts
	@if(isset($email_alerts) && $email_alerts->total()>0)
		({{$email_alerts->total()}})
	@endif</a
	>
</div>