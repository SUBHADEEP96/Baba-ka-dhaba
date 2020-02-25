<?php

if(isset($_POST['submit']))
{
	$mobile=$_POST['mobile'];
	$text=$_POST['text'];
	// Authorisation details.
	$username = "developer@thinksurfmedia.com";
	$hash = "4053fa7722fa12fd36500a3b92bccd935581ac6bc3e957d1734ac12f523a3848";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$mobile"; // A single number or a comma-seperated list of numbers
	$message = "$text";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	
	
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Send Sms</title>
  </head>
  <body>
  <div class="container col-lg-6"><br><br>
   <form method="post">
  <div class="form-group">
    <label for="mobile">Mobile Number</label>
    <input type="number" class="form-control" id="mobile" name="mobile" aria-describedby="emailHelp" placeholder="Enter Number">
    <small id="emailHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="text">Text</label>
    <textarea class="form-control" id="text" name="text"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>



<!---

sms gateway domains

vtext.com
vmobl.com
sms.alltelwireless.com




---->