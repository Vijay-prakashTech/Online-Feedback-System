<?php
include ('dbconfig.php');
session_start();
if(isset($_POST['sendcode']))
{
  $email=$_POST['email'];
  $randomCode=mt_rand(0,999999);

  $_SESSION['random']=$randomCode;
  $message="Your reset code is ".$randomCode;
  $subject="Reset Code";
  $to=$email;
  $result=mail($to, $subject , $message);
  echo ("the code has been send ".$to);
 $_SESSION['name']=$email;

}
if(isset($_POST['verify']))
{
  $code=$_POST['verifycode'];
  if($code==$_SESSION['random'])
  {
    header('location:resetpass.php');
  }
  else{
    echo ("wrong code");
  }
}







?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sendcode</title>
</head>
<body>
  <form>
    <table align="center">
      <h3>Send Code</h3>
      <tr>
        <td>
          <input type="text" name="email" placeholder="xyz@gmail.com" required>
</td></tr>
<tr>
  <td>
    <input type="submit" name="sendcode" value="SEND">
</td>
</tr>
<tr>
  <td>
    <input type="text" name="verifycode" value="123456">
</td>
</tr>
<tr>
  <td>
    <input type="submit" value="Verify code" name="verify">
</td>
</tr>

</table>
</form>
</body>
</html>