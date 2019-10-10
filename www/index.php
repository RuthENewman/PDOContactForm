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
            <h1 class="title"><?php echo $headTitle;?></h1>
            <p class="large-text"><?php echo $subTitle; ?></p>
        </header>
        <form class="contact-form" action="submitted-form.php" method="POST">
            <h2>Contact Us</h2>
            <div>
                <label class="label" for="inputName">Name</label>
                <input type="text" name="name" id="inputName" placeholder="Your Name" />
            </div>
            <div>
                <label class="label" for="inputEmail">Email</label>
                <input type="email" name="email" id="inputEmail" placeholder="Your Email" />
            </div>
            <div>
                <label class="label" for="inputSubject">Subject</label>
                <input type="text" name="subject" id="inputSubject" placeholder="Subject of your email" />
            </div>
            <div>
                <label class="label" for="inputMessage">Message</label>
                <textarea name="message" id="inputMessage" rows="5"></textarea>
            </div>
            <button class="btn" type="submit" name="submit">Submit</button>
        </form>
</html>