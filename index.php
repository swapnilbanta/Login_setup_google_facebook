<br> 
<br>






<html>
  <head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/brands.min.css">

  </head>

<body>

<h1 style="  display: flex;
  align-items: center;
  justify-content: center;color:white;">Login using  Facebook  Account </h1>
<br>
<br>
<br>
<a   style ="  background-color: blue;
  color: white;
  padding: 14px 25px;
  text-align: center;
  font-size:23px;
  text-decoration: none;
  display: inline-block, font-size:23px;display: flex;
  align-items: center;
  justify-content: center; " href="facebook.php"> <img src="https://www.transparentpng.com/thumb/facebook-logo/facebook-icon-transparent-background-20.png" alt="facebook icon transparent background @transparentpng.com"   style=" width:34px; height:30px;"/>    Login With Facebook</a>

  <br>

  <br>

  <H1   style="color:white;display: flex;
  align-items: center;
  justify-content: center;">Or</H1>
</body>

  </html>

  <?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a     style ="  background-color: red;
  color: white;
  padding: 14px 25px;
  text-align: center;
  font-size:23px;
  text-decoration: none;
  display: inline-block, font-size:23px;display: flex;
  align-items: center;
  justify-content: center; "  href="'.$google_client->createAuthUrl().'"><img src="hello.png"  style=" width:34px; height:30px;"/>Login With Google</a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Google Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 
 </head>
 <body  style ="background-color:black; opacity:0.9;">
  <div class="container">
   <br />
 <h1  style="color:white; display: flex;
  align-items: center;
  justify-content: center;">Login using Google Account</h1>
   <br />
   <div class="panel panel-default">
   <?php
   if($login_button == '')
   {
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="logout.php">Logout</h3></div>';
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>
   </div>
  </div>
 </body>
</html>




 </body>
</html>