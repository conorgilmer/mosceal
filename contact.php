<?php 
$thispage="Contact";
include('inc/header.php');
include('inc/menu.php');?>

<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<script>
$(function() {
   $( "#moscealform" ).validate({
           rules: {
                   first: "required",
                   last:  "required",
                   email: { email: true,
			    required: true}
           },
		messages:{
		first: "First name required",
		last: "Last name required",
		email: "Valid Email requierd"
}
   });
});
</script>



    <div class="container">

      <div class="hero-unit">
	<!--img src="img/mosceal.gif" height="129" width="90" align="right" valign="top">
-->
        <h1 class="mosceal">Contact Form!</h1><p><br></p>
 <!--a class="btn btn-primary btn-large" href="download.html">Download the App &raquo;</a>
-->
      </div>
<div class="span12">
  <h2>Contact Form for Mo Sceal</h2>

<form id="moscealform" class="well span10" action="sendemail.php" method="post">
	<div class="row">
	  <div class="span5">
		<label>First Name</label>
		<input type="text" class="span3" placeholder="Your First Name" name="first">
		<label>Last Name</label>
		<input type="text" class="span3" placeholder="Your Last Name" name="last">
		<label>Email Address</label>
		<div class="input-prepend">
	        	<span class="add-on"><i class="icon-envelope"></i></span><input type="text" id="inputIcon" class="span2" style="width:233px" placeholder="Your email address" name="email">
		</div>
		<label>Describe your Interest
		<select id="subject" name="type" class="span3">
			<option value="na" selected="">Choose One:</option>
			<option value="tourist">Tourist</option>
			<option value="local">Local</option>
			<option value="student">Student</option>
			<option value="academic">Academic</option>
			<option value="bookclub">Book Club</option>
			<option value="performer">Performer</option>
		</select>
		</label>
 	</div>
	<div class="span5">
		<label>Message</label>
		<textarea name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
	</div>
      </div> <!-- row -->
<button type="submit" class="btn btn-primary pull-right">Send</button>
</form>
</div>


    <script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
<?php include('inc/footer.php');?>
