<?php
$title = "Contact Us";
$content ="
<link rel='stylesheet'
 href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
  integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T'
  crossorigin='anonymous'>

<h2>You can contact Us by Send us an emil</h2>
<form action='' method='post' style='font-weight: bold;'>
<p>Name</p> <input type='text' name='name'>
<p>Email</p> <input type='text' name='email'>
<p>Message</p><textarea name='message' rows='8' cols='25'></textarea><br />
<input class='btn btn-primary' style='background: #f4cd94;
color: black;
border: aliceblue;
margin: 10px;' type='submit' value='Send'>
<input class='btn btn-danger' style='background: #f4cd94;
color: black;
border: aliceblue;
margin: 10px;'
 type='Reset' value='Clear'>
</form>



";
include 'Template.php';
?>

