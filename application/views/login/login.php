<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url();?>assets/css/login-custom.css">
        <title>Document</title>
    </head>
    <body>

<?php
if ($this->session->flashdata('message')) {
    echo $this->session->flashdata('message');
}
?>




        <form action="action_page.php">
            <div class="imgcontainer">
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname">
                    <b>Username</b>
                </label>
                <input
                    type="text"
                    placeholder="Enter Username"
                    name="uname"
                    required="required">

                <label for="psw">
                    <b>Password</b>
                </label>
                <input
                    type="password"
                    placeholder="Enter Password"
                    name="psw"
                    required="required">

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember">
                    Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot
                    <a href="#">password?</a>
                </span>
            </div>
        </form>
    </body>
</html>