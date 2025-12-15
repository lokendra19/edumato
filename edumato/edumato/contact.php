<?php
include_once('header.php');
?>
 <section id="contact">
        <h1 class="h-primary" style="text-align:center;color:white;">Contact Us</h1>
        <div id="contact-box">
            <form action="contactus.php" method="post">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" required="" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="name">Email: </label>
                    <input type="email" required="" name="email" id="Email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="name">Phone number: </label>
                    <input type="text" required="" name="phone" id="phone" placeholder="Enter your phone">
                </div>

                <div class="form-group">
                    <label for="name">Message: </label>
                    <textarea name="message" required="" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="send" value="SEND">
                </div>
            </form>
        </div>
    </section>
 
<?php
include_once('footer.php');
?>