<!DOCTYPE html>
<html lang="en-US">
<!-- This is a comment. -->
<head>
    <title> Login </title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo site_url("css/w3.css"); ?>">
    
    <style>
        .login-form {
            width: 340px;
            margin: 100px auto;
        }
        
        h2 {
            font-weight: bold;
        }
        
        a {
            text-decoration: none;
        }
        
        .alert {
            width: 400px;
            margin: 10px auto;
        }
    </style>
    
</head>
<body>

    <?php 
    if ($this->session->flashdata("message") !== null)
    {
        echo '<div class="alert w3-panel w3-pale-red w3-border w3-center">';
        echo '<p>' . $this->session->flashdata("message") . '</p>';
        echo '</div>';
    }    
    ?>


<div class="login-form">

    <h2 class="w3-center"> Log in </h2>
    <?php echo form_open('home/check_username','class="w3-container"'); ?>
        <input class="w3-input" type="text" name="username" placeholder="Username" required>
        <input class="w3-input w3-section" type="password" name="password" placeholder="Password" required>
        <button class="w3-button w3-block w3-section w3-blue">Log in</button>
    </form>
    
    <p class="w3-center w3-text-blue"><?php echo anchor("home/sign_up","Create an Account"); ?></p>
    
</div>

</body>
</html>