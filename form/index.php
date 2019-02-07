<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact form tutorial</title>
        <link rel="stylesheet" href="stylesheet.css">
        <link href="https://font.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    </head>
    <body>
        <main>
            <p>SEND E-MAIL</p>
            <form class="contact-form" action="contactform.php" method="POST">
                <input type="text" name="name" placeholder="Full name">
                <input type="text" name="mail" placeholder="Your e-mail">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Message"></textarea>
                <button type="submit" name="submit">SEND MAIL</button>
            </form>
        </main>
    </body>
</html>