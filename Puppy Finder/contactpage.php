<html lang="en">


<head>
	<title>Contact Us</title>
	<?php include 'script.php' ?>
	<link rel="stylesheet" type="text/css" href="css/contactstyle.css">

</head>

<!Header Section>
<body>
<div class="jumbotron text-center">
	<h2>Contact Us📞</h2>
</div>

<!Navigation bar code inclusion>
<?php include 'navbar.php' ?>
<br>
<div class="container pt-5">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p><i>Swing by for a cup of coffee, or leave us a message:</p></i>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/pup1.jpg" class="img-fluid" style="width:90%" class="mx-auto d-block">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your First name">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your Last name">
        <label for="location">Location</label>
        <input type="text" id="location" name="location" placeholder="City Name">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>


</body></html>
