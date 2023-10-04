<?php
    require __DIR__ . '/app/src/app.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app/css/styles.css">
    <link rel="stylesheet" href="app/css/contact.css">
    <script src="js/custom.js" defer></script>
</head>

<body>
    <?php include 'app/views/header.php'; ?>
    <section class='contact-us-section'>
        <div class='container flex-container'>
            <div class='contact-us-text'>
                <p class='section-heading-border'></p>
                <div>
                    <p class='section-heading'>Contact us</p>
                    <p class='heading-2'>We'd love to hear from you</p>
                    <p class='section-paragraph'>Have any question in mind or want to enquire? Please feel free to
                        contact us through the form or the following details.
                    </p>
                </div>
            </div>
            <div class="contact-details">
                <div class="contacts">
                    <p class="contacts-header">Let's talk!</p>
                    <a class="contacts-link" href="tel:+1 23 456 789">+1 23 456 789</a>
                    <a class="contacts-link" href="mailto:hello@finsweet.com">hello@finsweet.com</a>
                </div>
                <div class="office">
                    <p class="office-heading">Headoffice</p>
                    <p class="office-paragraph">8 Brewery Drive, Hudson, NH 03051 <br>USA</p>
                </div>
                <div class="office">
                    <p class="office-heading">Branch Office</p>
                    <p class="office-paragraph">178 Marconi St., Venice, 34293 <br>Italy</p>
                </div>
                <div>
                    <a class="socials-link" href="" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a class="socials-link" href="" target="_blank"><i class="bi bi-twitter-x"></i></a>
                    <a class="socials-link" href="" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section class='contact-form-section'>
        <div class='container flex-container'>
            <form action="contact.php" method="post" class="contact-form">
                <div class="flex-container">
                    <div>
                        <label for="fname">First name</label><br>
                        <input type="text" id="fname" name="first_name" required>
                    </div>
                    <div>
                        <label for="lname">Last name</label><br>
                        <input type="text" id="lname" name="last_name" required>
                    </div>
                </div>
                <div class="flex-container">
                    <div>
                        <label for="email">Email</label><br>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="subject">Subject</label><br>
                        <input type="text" id="subject" name="subject" required><br>
                    </div>
                </div>
                <label for="contact-message">Message</label><br>
                <textarea id="contact-message" name="message" placeholder='Type your Message' required></textarea>
                <div class="button-container">
                    <button name="contact" type="submit">Send message</button>
                </div>
            </form>
        </div>
    </section>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9221.345496672142!2d25.2781468!3d54.7037049!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96b1c1c3bc9f%3A0xb4eca31b162c5579!2sVilnius%20Coding%20School%20-%20Karjeros%20keitimo%20centras%2C%20programavimo%20kursai!5e0!3m2!1slt!2slt!4v1695823472077!5m2!1slt!2slt"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    <?php include 'app/views/footer.php'; ?>
</body>

</html>