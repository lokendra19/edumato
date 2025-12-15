 
<?php
include_once('header.php');
?>
 
<head>
    <link rel="stylesheet" href="css/login.css"">
</head>

<body style="background-color: black;">  
    <form action="logindata.php" method="post">
        <div class="log">
            <p> <b>Login!</b><img src="login1.png" alt=""></p>
            <h3 style="text-align:center;margin-top:2px;">Already our customer</h3>
            <div id="user" class="input">
                <input type="email" required="" name="username" id="1" placeholder="Username or email">
            </div>
            <div id="pass" class="input">
                <input type="password" required="" name="password" placeholder="Enter valid password"><br>
                password must be at least 8 charcter
            </div>
            <div>
                <button type="submit" name="enter">Sign in</button>
            </div>
           


        </div>
        <div class="forgot" style="font-size:20px;">

            <span>
                Forgot your password?
            </span>
            <span><a href="https://email.com" target="_blank"> click Here</a></span><br>
            <span>
                NEW ?
            </span>
            <span><a href="register.php" target="_parent"> Register Here</a></span>
        </div>



    </form>
 

 
<?php
include_once('header.php');
?>