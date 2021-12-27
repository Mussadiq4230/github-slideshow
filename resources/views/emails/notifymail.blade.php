<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dresses Ads - Ads Network</title>
<style type="text/css">
@media only screen and (max-width: 600px) {
 table[class="contenttable"] {
 width: 320px !important;
 border-width: 3px!important;
}
 table[class="tablefull"] {
 width: 100% !important;
}
 table[class="tablefull"] + table[class="tablefull"] td {
 padding-top: 0px !important;
}
 table td[class="tablepadding"] {
 padding: 15px !important;
}
}
</style>
</head>
<?php 
$data = (Object)$data;
?>
<body style="margin:0; border: none; background:#f5f5f5">
<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
  <tr>
    <td align="center" valign="top"><table class="contenttable" border="0" cellpadding="0" cellspacing="0" width="600" bgcolor="#ffffff" style="border-width: 8px; border-style: solid; border-collapse: separate; border-color:#ececec; margin-top:40px; font-family:Arial, Helvetica, sans-serif">
        <tr>
          <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td width="100%" height="40">&nbsp;</td>
                </tr>
                <tr>
                  <td valign="top" align="center"><a href="#"><img alt="" src="{{asset('image/logo.png')}}" width="275" style="padding-bottom: 0; display: inline !important;"></a></td>
                </tr>
                <tr>
                  <td width="100%" height="40">&nbsp;</td>
                </tr>
                <tr>
              </tbody>
            </table></td>
        </tr>
        <tr>
          <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td bgcolor="#000000" align="center" style="padding:16px 10px; line-height:24px; color:#ffffff; font-weight:bold"> Hi {{$data->name && $data->name !="" ? $data->name : "" }}<br>
                    {{$data->title && $data->title !="" ? $data->title : ""}} </td>
                </tr>
                <tr>
              </tbody>
            </table></td>
        </tr>
        <tr>
          <td class="tablepadding" style="padding:20px; font-size:14px; line-height:20px;">	
          @if($data->type == "2")	
          	You can access your account by using following credentials:<br/>
          		<table width="100%" style="font-size: 13px;padding:6px">
          			<tbody>
          				<tr>
          					<td>Email:</td>
          					<td>{{$data->email}}</td>
          				</tr>
          				<tr>
          					<td>Password:</td>
          					<td>{{$data->password}}</td>
          				</tr>
          				

          			</tbody>
          		</table>
          			<b></b>
          		</p>
          	@elseif($data->type == "1")
          		You have successfully registered an account on Dress Ads, click on the Account link to get started.<br/>
          		</p>
          	 @elseif($data->type == "3")
          	 	You have requested password reset. To set a new password please click on Reset Password link given below. This link will expire in 24 Hours.<br/>
          		</p>
          	@endif

          </td>
        </tr>
  	
  	  @if($data->type == "2" || $data->type == "1")
        <tr>
          <td><table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size:13px;color:#555555; font-family:Arial, Helvetica, sans-serif;">
              <tbody>
                <tr>
                  <td class="tablepadding" align="center" style="font-size:14px; line-height:22px; padding:20px; border-top:1px solid #ececec;">
                    <a href="{{url('/account')}}" style="background-color:#000000; color:#ffffff; padding:6px 20px; font-size:14px; font-family:Arial, Helvetica, sans-serif; text-decoration:none; display:inline-block; text-transform:uppercase; margin-top:10px;">My Account</a></td>
                </tr>
                <tr> </tr>
              </tbody>
            </table></td>
        </tr>
       @elseif($data->type == "3")

       		  <tr>
          <td><table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size:13px;color:#555555; font-family:Arial, Helvetica, sans-serif;">
              <tbody>
                <tr>
                  <td class="tablepadding" align="center" style="font-size:14px; line-height:22px; padding:20px; border-top:1px solid #ececec;">
                    <a href="{{$data->link}}" style="background-color:#000000; color:#ffffff; padding:6px 20px; font-size:14px; font-family:Arial, Helvetica, sans-serif; text-decoration:none; display:inline-block; text-transform:uppercase; margin-top:10px;">Reset Password</a></td>
                </tr>
                <tr> </tr>
              </tbody>
            </table></td>
        </tr>
       @endif
        <tr>
          <td bgcolor="#fcfcfc" class="tablepadding" style="padding:20px 0; border-top-width:1px;border-top-style:solid;border-top-color:#ececec;border-collapse:collapse"><table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size:13px;color:#999999; font-family:Arial, Helvetica, sans-serif">
              <tbody>
                <tr>
                  <td align="center" class="tablepadding" style="line-height:20px; padding:20px;">Dresses Ads,  <a href="mailto:info@adsnetwork.com">info@adsnetwork.com</a>  </td>
                </tr>
                <tr> </tr>
              </tbody>
            </table>
            <table align="center">
              <tr>
                <td style="padding-right:10px; padding-bottom:9px;"><a href="#" target="_blank" style="text-decoration:none; outline:none;"><img src="facebook.png" width="32" height="32" alt=""></a></td>
                <td style="padding-right:10px; padding-bottom:9px;"><a href="#" target="_blank" style="text-decoration:none; outline:none;"><img src="twitter.png" width="32" height="32" alt=""></a></td>
                <td style="padding-right:10px; padding-bottom:9px;"><a href="#" target="_blank" style="text-decoration:none; outline:none;"><img src="google_plus.png" width="32" height="32" alt=""></a></td>
                <td style="padding-right:10px; padding-bottom:9px;"><a href="#" target="_blank" style="text-decoration:none; outline:none;"><img src="pinterest.png" width="32" height="32" alt=""></a></td>
              </tr>
            </table>
        </td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table width="100%" cellspacing="0" cellpadding="0" border="0" style="font-size:13px;color:#999999; font-family:Arial, Helvetica, sans-serif">
        <tbody>
          <tr>
            <td class="tablepadding" align="center" style="line-height:20px; padding:20px;"> 2021 Dress Ads All Rights Reserved. </td>
          </tr>
          <tr> </tr>
        </tbody>
      </table></td>
  </tr>
</table>
</body>
</html>