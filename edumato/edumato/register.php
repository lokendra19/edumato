<?php
include_once('header.php');
?>


    <form action="registration.php" method="post">
        <fieldset style="width:50%;margin:auto;background-color:aquamarine;">
            <legend style="text-align:center;color:white;">
                <h2 style="color:blue; background-color:aqua;font-size:50px; text-shadow:5px 2px 10px yellow">
                Create New Account !</h2>
            </legend>
            <div class="form-group" style="width: 50%;margin: auto;">
                Name : <input type="text" name="name" required="" autofocus="" placeholder="Enter your name here"><br><br>
                Email : <input type="email" name="email" required="" placeholder="Enter your email here"><br><br>
                 Password : <input type="Password" name="password" required="" placeholder="*******" maxlength="15"> <br><br>
                Phone no. : <input type="text" name="phone" required="" placeholder="Enter you phone no."><br><br>
                whatsapp no. : <input type="text" name="wtsphone" required=""
                    placeholder="Enter you Whatsapp no."><br><br>
                Gender : <input type="radio" name="gender" required="" value="Male">Male
                <input type="radio" name="gender" required="" value="Female">Female
                <input type="radio" name="gender" required="" value="other">Other <br><br>
                Address : <br>
                <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>
                <div class="btn" style=" position: relative; left:80px;">
                    <button class="btn btn-warning" name="enter">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>
    <?php
include_once('footer.php');
include_once('registration.php');
?>