<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app/css/styles.css">
    <link rel="stylesheet" href="app/css/donation.css">
    <script src="js/custom.js" defer></script>
</head>

<body>
    <?php include 'app/views/header.php'; ?>
    <section class='donation-section'>
        <div class='container flex-container'>
            <div class='donation-text'>
                <p class='section-heading-border'></p>
                <div>
                    <p class='section-heading'>Donate</p>
                    <p class='heading-2'>Making a donation for nature.</p>
                    <p class='section-paragraph'>When you donate, you're supporting effective solutions to big
                        environmental challenges—an investment in the future of our planet.
                    </p>
                    <button>Donate now</button>
                </div>
            </div>
            <div>
                <img src="app/images/donate-image.png" alt="donate image" class='donate-image'>
            </div>
        </div>
    </section>
    <section class="how-to-contribute-section">
        <div class="container flex-container">
            <div>
                <p class="heading-2">How you can contribute to protect Earth</p>
                <p class='section-paragraph'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                    enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut
                    commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc
                    ut sem vitae risus tristique posuere.</p>
            </div>
            <div>
                <div class="how-to-contribute-buttons flex-container">
                    <button onclick="howToContributeText()" class="active-button" name="overview">Overview</button>
                    <button onclick="howToContributeText()" name="impact">Impact</button>
                    <button onclick="howToContributeText()" name="what-you-get">What you get</button>
                </div>
                <div class="how-to-contribute-text">
                    <p class='section-paragraph'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                        varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor
                        interdum nulla, ut commodo diam libero vitae erat. </p>
                    <p class='section-paragraph'>
                        Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
                        tristique posuere.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="donation-usage-section">
        <div class="container flex-container">
            <div class="heading-2">How we use your donation</div>
            <div class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.  Nunc ut sem vitae risus tristique posuere.</div>
            <div class="section-paragraph">Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet.</div>
        </div>
    </section>
    <?php include 'app/views/volunteer.php'; ?>

    <?php include 'app/views/footer.php'; ?>
</body>

</html>