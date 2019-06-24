<!DOCTYPE html>
<html lang="en-US">
<!-- This is a comment. -->
<head>
	<title><?php echo $title; ?></title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo site_url("css/w3.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("css/style.css"); ?>">
    
</head>
<body>

<header class="w3-container w3-center w3-padding-16">
    <img src="<?php echo site_url("images/VS-logo-4C-Grad-300px.png"); ?>" alt="logo">
</header>
<br>
<div class="w3-content">
    <!-- Navigation bar -->
    <nav class="w3-bar w3-padding w3-white">
        <a href="<?php echo site_url("home"); ?>" class="w3-bar-item w3-button">Home</a>
        <a href="<?php echo site_url("blog"); ?>" class="w3-bar-item w3-button">Blog</a>
        <a href="<?php echo site_url("profile"); ?>" class="w3-bar-item w3-button">Profile</a>
        <a href="<?php echo site_url("members"); ?>" class="w3-bar-item w3-button">Members</a>
        <div class="w3-dropdown-hover">
            <button class="w3-button">Your Vegan Start</button>
            <div class="w3-dropdown-content w3-bar-block w3-border w3-center">
                <a href="<?php echo site_url("home/vegan_start"); ?>" class="w3-bar-item w3-button">Your Vegan Start</a>
                <a href="<?php echo site_url("home/why_go_vegan"); ?>" class="w3-bar-item w3-button">Why Go Vegan?</a>
                <a href="<?php echo site_url("home/veganize_breakfast"); ?>" class="w3-bar-item w3-button">How to veganize your Breakfast</a>
                <a href="<?php echo site_url("home/faq"); ?>" class="w3-bar-item w3-button">FAQ</a>
            </div>
        </div>
        <div class="w3-right">
            <a href="<?php echo site_url("home/about_us"); ?>" class="w3-bar-item w3-button">About Us</a>
            <?php 
                if (isset($username))
                {
                    echo '<a href="' . site_url("home/sign_out") . '" class="w3-bar-item w3-button">Sign out</a>';
                }
                else
                {
                    echo '<a href="' . site_url("home/login") . '" class="w3-bar-item w3-button">Sign in</a>';
                }
            ?>

        </div>
    </nav>