<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sign Up</title>

        <!-- Bootstrap CSS CDN -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url();?>assets/css/bootstrap.min.css">

        <!-- Our Custom CSS -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url();?>assets/css/register.css">

        <!-- Font Awesome JS -->
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/font/js/solid.js"></script>
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/font/js/fontawesome.js"></script>

    </head>

    <body>
        <div class="main">
            <p class="sign" align="center">Sign Up</p>
            <form
                action="<?php echo site_url('Register_controller/index') ?>"
                method="post"
                accept-charset="utf-8">
                <input
                    class="un "
                    type="text"
                    align="center"
                    name="first_name"
                    placeholder="first name">
                <?php echo form_error('first_name'); ?>

                <input
                    class="un "
                    type="text"
                    align="center"
                    name="last_name"
                    placeholder="last name">
                <?php echo form_error('last_name'); ?>

                <input
                    class="un "
                    type="text"
                    align="center"
                    name="contact_no"
                    placeholder="contact number"
                    maxlength="10">
                <?php echo form_error('contact_no'); ?>

                <input class="un " type="text" align="center" name="email" placeholder="email">
                <?php echo form_error('email'); ?>

                <input
                    class="pass"
                    type="password"
                    align="center"
                    name="password"
                    placeholder="Password">
                <?php echo form_error('password'); ?>
                <button type="submit" align="center" class="submit">Sign Up</button>

                <p class="forgot" align="center">
                <a href="#"> Login here</a>
                </p>
            </form>
        </div>
    </body>

</html>