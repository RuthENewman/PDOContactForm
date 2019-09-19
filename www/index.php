<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css" type="text/css" />
        <?php
            $headTitle = 'Simple Contact Form';
            $subTitle = 'Get in touch and let us know what we need to!';
        ?>
        <title><?php echo $headTitle?></title>
    </head>
    <body>
        <header>
            <h1><?php echo $headTitle;?></h1>
            <p class="large-text"><?php echo $subTitle; ?></p>
        </header>
        <form method="POST">
            <h2>Contact Us</h2>
            <label for="inputName">Name</label>
            <input type="text" name="name" id="inputName" placeholder="Your Name" />
            <label for="inputEmail">Email</label>
            <input type="email" name="email" id="inputEmail" placeholder="Your Email" />
            <label for="inputSubject">Subject</label>
            <input type="text" name="subject" id="inputSubject" placeholder="Subject of your email" />
            <label for="inputMessage">Message</label>
            <textarea id="inputMessage" rows="5"></textarea>
            <button type="submit">Submit</button>
        </form>
</html>