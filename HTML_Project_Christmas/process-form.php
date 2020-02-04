<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Saved - Christmas Holidays</title>
    <link href="https://fonts.googleapis.com/css?family=Mountains+of+Christmas&display=swap" rel="stylesheet">
    <link href="Style/style.css" rel="stylesheet">
</head>
<body class="process-php">
<header class="header">
    <a href="index.html">
        <img src="img/christmas_tree_PNG95.fw.png" alt="" class="logo">
    </a>
    <div>
        <h1 class="front_name" style="font-family: 'Mountains of Christmas', cursive;"> Christmas Holidays </h1>
    </div>

    <nav>
        <ul class="buttons">
            <li><a href="index.html" class="button1">Home</a></li>
            <li class="dropdown"><a href="#" class="button2">Menu</a>
                <ul class="dropdown-content">
                    <li><a href="index_page1.html">Active</a></li>
                    <li><a href="index_page2.html">Spa</a></li>
                    <li><a href="index_page3.html">Workshop</a></li>
                </ul>
            </li>
            <li><a href="Legal/about.html" class="button3">About</a></li>
            <li><a href="Legal/contact.html" class="button4">Contact us</a></li>
        </ul>
    </nav>
</header>

<main>
    <div class="banner">
        <h3>Your order is accepted!</h3>
    </div>
    <?php
    /* All form elements must be checked - that required information is present and that all form data
    is in the correct format. Security checks must also be made before database queries are made */
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    // Output a friendly message to confirm that everything went well
    echo('<p class="message">Thank You, ' . $fname . '&nbsp;' . $lname . ', for your order.</p> 
<p>Please check your inbox.</p>
<p>The email with all the details and payment option has been sent</p>
<p>Thank you for order!</p>
<p>We wish you Happy Christmas Holidays!</p> ');
    ?>
</main>


<div class="footer" style="margin-top: 110px;">
    <div class="nav1">
        <p class="gifts">© 2019 Christmas holidays. All rights reserved</p>
        <a href="Legal/privacy.html" class="privacy_link">
            <small>Privacy</small></a>
        <p id="created_by">Created by Maria Vodovoz</p>

        <div class="icons">
            <a href="https://www.facebook.com/" target="_blank">
                <img src="img/facebook_icon.png" alt="facebook">
            </a>
            <a href="https://www.instagram.com/" target="_blank">
                <img src="img/instagram_icon.png" alt="instagram">
            </a>
            <a href="https://twitter.com/" target="_blank">
                <img src="img/twitter_icon.png" alt="twitter">
            </a>
            <a href="https://www.linkedin.com/" target="_blank">
                <img src="img/linkedin_icon.png" alt="linkedin">
            </a>
            <a href="https://www.youtube.com/" target="_blank">
                <img src="img/youtube_icon.png" alt="youtube">
            </a>
        </div>
    </div>


</div>
</body>
</html>