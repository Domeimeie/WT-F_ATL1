<?php $currentPage = 'Contact'; ?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="style/form.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/navigation.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="icon" type="image/x-icon" href="/media/favicon.png">
</head>

<body>
    <?php include'navigation.php'; ?>
    <main class="content">
        <form class="contactForm" action="https://www.google.ch">
            <p>Got any questions?<br>Please fill out the contact form below with your request, and we will respond as soon as possible.</p>
            <p>
                <label for="lname">Name*</label>
                <input type="text" id="lname" name="lname" required pattern="[A-Za-z ]+"
                    title="May only contain letters" placeholder="Name">
            </p>
            <p>
                <label for="mail">Email*</label>
                <input type="email" id="mail" name="mail" required title="May only contain letters" placeholder="Email">
            </p>
            <p>
                <label for="message">Message*</label>
                <textarea id="message" name="message" required placeholder="Your message"></textarea>
            </p>
            <input type="submit" value="Absenden">
        </form>
    </main>
    <?php include"footer.html"; ?>
</html>