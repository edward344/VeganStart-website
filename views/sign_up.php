<!DOCTYPE html>
<html lang="en-US">
<!-- This is a comment. -->
<head>
    <title> Sign Up </title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo site_url("css/w3.css"); ?>">
    
    <style>
        body {background: #3598dc;}
        
        .login-form {
            width: 400px;
            margin: 50px auto;
            background-color: white;
        }
        
    </style>
    
</head>
<body>

<div class="login-form w3-padding-large">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account!</p>
    
    <?php echo validation_errors('<p class="w3-text-red">','</p>'); ?>
    
    <?php echo form_open("home/sign_up"); ?>
        <label>Username</label>
        
        <input class="w3-input w3-section" type="text" name="username">
        <label>Email Address</label>
        
        <input class="w3-input w3-section" type="text" name="email">
        
        <label>Password</label>
        <input class="w3-input w3-section" type="password" name="password">
        <button class="w3-button w3-blue w3-section">Sign Up</button>
    </form>
</div>

<p class="w3-center w3-text-white">Already have an account? <?php echo anchor("home/login","Login here"); ?></p>

</body>
</html>