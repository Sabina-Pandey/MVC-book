<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

<?php include 'view/partials/header.php'; ?>

    <div class="heading">
        <h2>Contact Us</h2>
        <p>Email Us and keep upto date with the latest news</p>
    </div>
    <div class="contact">
      <form action="contact.php" method="post">
          <input type="text" name="name" placeholder="Enter your name">
          <input type="email" name="email" placeholder="Enter your email">
          <input type="subject" name="subject" placeholder="Subject of this message">
          <textarea name="message" placeholder="Send your message" rows="10" cols="10"></textarea>
          <input type="submit" name="submit" value="Send Message">
      </form>
    </div>
</body>
</html> 