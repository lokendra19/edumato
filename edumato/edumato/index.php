<?php
include_once('header.php');
?>
 
		<div id="logo">
			<b>e!</b>
		</div>
		<div id="heading">find best hotels,cafes,bars</div>

	</div>
	<!--Image Search Page End-->
	<!--Quick Search Page-->

	<div class="quickSearchContainer">
		<p class="quickSearchHeading">Quick Search</p>
		<p class="quickSearchSubheading">Discover Restaurents By Meals Type</p>
		<div class="tileContainer" style="width: 400px; min-height: 150px; float: left">
			<div class="tilecomponent1">
				<img src="images/breakfast.jpg" style="height: 150px; width: 100%" />
			</div>
			<div class="tilecomponent2" style="float: left">
				<div class="componentHeading">Breakfast</div>
				<div class="componentSubHeading">
					Start Your Day With Exclusive Breakfast Options
				</div>
			</div>
		</div>
		<div class="tileContainer" style="width: 400px; min-height: 150px; float: left">
			<div class="tilecomponent1">
				<img src="images/snacks.jpg" style="height: 150px; width: 100%" />
			</div>
			<div class="tilecomponent2" style="float: left">
				<div class="componentHeading">Snacks</div>
				<div class="componentSubHeading">
					Start Your Day With Exclusive snacks Options
				</div>
			</div>
		</div>
		<div class="tileContainer" style="width: 400px; min-height: 150px; float: left">
			<div class="tilecomponent1">
				<img src="images/lunch.jpg" style="height: 150px; width: 100%" />
			</div>
			<div class="tilecomponent2" style="float: left">
				<div class="componentHeading">Lunch</div>
				<div class="componentSubHeading">
					Start Your Day With Exclusive lunch Options
				</div>
			</div>
		</div>
		<div class="tileContainer" style="width: 400px; min-height: 150px; float: left">
			<div class="tilecomponent1">
				<img src="images/drinks.jpg" style="height: 150px; width: 100%" />
			</div>
			<div class="tilecomponent2" style="float: left">
				<div class="componentHeading">Drinks</div>
				<div class="componentSubHeading">
					Start Your Day With Exclusive Drinks Options
				</div>
			</div>
		</div>
		<div class="tileContainer" style="width: 400px; min-height: 150px; float: left">
			<div class="tilecomponent1">
				<img src="images/dinner.jpg" style="height: 150px; width: 100%" />
			</div>
			<div class="tilecomponent2" style="float: left">
				<div class="componentHeading">Diner</div>
				<div class="componentSubHeading">
					Start Your Day With Exclusive Diner Options
				</div>
			</div>
		</div>
		<div class="tileContainer" style="width: 400px; min-height: 150px; float: left">
			<div class="tilecomponent1">
				<img src="images/nightlife.jpg" style="height: 150px; width: 100%" />
			</div>
			<div class="tilecomponent2" style="float: left">
				<div class="componentHeading">Nightlife</div>
				<div class="componentSubHeading">
					Start Your Day With Exclusive Nightlife Options
				</div>
			</div>
		</div>
	</div>
	<div class="wd">

	</div>
	<div style="clear:both"></div>
	<!-- about section start  -->
	<div class="about-container">
		<div class="about-image">
			<img src="images/burger.jpg" width="500px" height="
			500px" alt="">
		</div>
		<div class="about-data">
			<h2>We Are Edumato</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
				alteration
				in
				some form, by injected humour, or randomised words which don't look even slightly believable. If you
				are
				going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
				in
				the
				middle of text. All.</p>
			<button class="btn btn-warning">Read more</button>
		</div>
	</div>
	<div style="clear:both"></div>
	<!-- about section end  -->
	<!-- book table and map section start -->
	<div class="container-fluid">
		<form method="post">
			<div align="center" class="col-md-6">
				<h1 id="booktable">Book A Table</h1>
				<label for="name">
					<input type="text" name="name" required="" maxlength="20" placeholder="Your Name" class="input-data">
				</label><br>
				<label for="phone">
					<input type="text" name="phone" required="" maxlength="10" placeholder="Phone Number" class="input-data">
				</label><br>
				<label for="email">
					<input type="email" name="email" required="" placeholder="Your Email" class="input-data">
				</label><br>
				<label for="person">
					<input type="text" name="person" required="" placeholder="How Many Presons?" class="input-data">
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