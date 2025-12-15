<?php
include_once('header.php');
?>

<!-- book table and map section start -->
<div class="container-fluid">
		<form method="post"autocomplete="off" enctype="multipart/form-data" onsubmit="return validate(this);">
			<div align="center" class="col-md-6">
				<h1 id="booktable">Book A Table</h1>
				<label for="name">
					<input type="text" name="name"  required="" placeholder="Your Name" class="input-data">
				</label><br>
				<label for="phone">
					<input type="text" name="phone" required=""  placeholder="Phone Number" class="input-data">
				</label><br>
				<label for="email">
					<input type="email" name="email" required=""  placeholder="Your Email" class="input-data">
				</label><br>
				<label for="person">
					<input type="text" name="person" required=""  placeholder="How Many Presons?" class="input-data">
				</label><br>
				<label for="date">
					<input type="date" name="date" required="" class="input-data">
				</label><br>
				<label for="enter">
					<input type="submit" name="enter" value="BOOK NOW" class="btn btn-warning">
				</label>


			</div>
		</form>
		<div class="col-md-6">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.799621818353!2d75.77077951496943!3d26.878106683142537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db44e3a531b95%3A0x8c70bc5245f3c708!2s1%2C%2080%20Feet%20Rd%2C%20Chhayadip%20Nagar%2C%20Shri%20Gopal%20Nagar%2C%20Gopal%20Pura%20Mode%2C%20Jaipur%2C%20Rajasthan%20302018!5e0!3m2!1sen!2sin!4v1680853011617!5m2!1sen!2sin"
				width="500" height="400" style="border:0;margin-top:10px;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade">
			</iframe>
		</div>
	</div>
	<!-- book table and map section end -->
	<div style="clear:both"></div>



<?php
include_once('footer.php');
include_once('form.php');
?>