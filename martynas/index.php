<?php
    require __DIR__ . '/app/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app/css/styles.css">
    <script src="js/custom.js" defer></script>
</head>

<body>
        
    <?php include 'app/views/header.php'; ?>
        <section class='hero'>
            <div class="container flex-container">
                <div class='hero-header'>
                    <p>Save the enviroment today for a better tomorrow</p>
                    <button>What we do</button>
                </div>
                <div class='statistics flex-container'>
                    <p>23,800 trees planted</p>
                    <span class='statistics-border'></span>
                    <p>5840 donations collected</p>
                </div>
            </div>
        </section>
        <section class='about-us-section'>
            <div class='container flex-container'>
                <div class='about-us-container flex-container'>
                    <div class='about-us-text'>
                        <p class='section-heading-border'></p>
                        <div>
                            <p class='section-heading'>Know about us</p>
                            <p class='heading-2'>We help nature smile and survive everywhere</p>
                            <p class='section-paragraph'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum
                                excepturi ex quidem inventore provident numquam ratione sint debitis similique
                                quibusdam!</p>
                            <p class='section-paragraph'>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Commodi iste animi doloribus quod obcaecati hic, cum, non quae explicabo rerum
                                exercitationem excepturi. Illum vitae veritatis dicta magni laudantium architecto totam
                                ea! Recusandae aspernatur adipisci corrupti tempore esse id quo, animi iste alias sequi
                                quia iure odit expedita minus laboriosam perspiciatis?</p>
                            <button class='learn-more-button'>Learn more</button>
                        </div>
                    </div>
                    <div>
                        <img src="app/images/aboutus.png" alt="About us" class='about-us-img'>
                    </div>
                </div>

                <div>
                    <div class='logo-heading'>
                        <p>Our supporters</p>
                        <p class='supporters-border'></p>
                    </div>
                    <div class='supporters-logos flex-container'>
                        <img src="app/images/Logo (1).png" alt="">
                        <img src="app/images/Logo (2).png" alt="">
                        <img src="app/images/Logo (3).png" alt="">
                        <img src="app/images/Logo (4).png" alt="">
                        <img src="app/images/Logo (5).png" alt="">
                        <img src="app/images/Logo(7).png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class='what-we-do-section'>
            <div class='container flex-container'>
                <div class='what-we-do-text'>
                    <p class='section-heading-border'></p>
                    <div>
                        <p class='section-heading'>What we do</p>
                        <p class='heading-2'>We care for earth, care for the coming birth</p>
                        <p class='section-paragraph'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum
                            excepturi ex quidem inventore provident numquam ratione sint debitis similique quibusdam!
                        </p>
                        <div class='what-we-do-grid'>
                            <div>
                                <img src="app/images/Icon.png" alt="Icon" class='icon'>
                                <div class='what-we-do-grid-text'>
                                    <p class='what-we-do-grid-heading'>Build Healthy Cities</p>
                                    <p class='section-paragraph'>Lorem ipsum dolor sit, amet consectetur adipisicing
                                        elit. Saepe enim qui ipsam aspernatur odio pariatur.</p>
                                </div>
                            </div>
                            <div>
                                <img src="app/images/Icon (1).png" alt="Icon" class='icon'>
                                <div class='what-we-do-grid-text'>
                                    <p class='what-we-do-grid-heading'>Tree Plantation</p>
                                    <p class='what-we-do-grid-text section-paragraph'>Lorem ipsum dolor sit, amet
                                        consectetur adipisicing elit. Saepe enim qui ipsam aspernatur odio pariatur.</p>
                                </div>
                            </div>
                            <div>
                                <img src="app/images/Icon (2).png" alt="Icon" class='icon'>
                                <div class='what-we-do-grid-text'>
                                    <p class='what-we-do-grid-heading'>Protect Land and Water</p>
                                    <p class='what-we-do-grid-text section-paragraph'>Lorem ipsum dolor sit, amet
                                        consectetur adipisicing elit. Saepe enim qui ipsam aspernatur odio pariatur.</p>
                                </div>
                            </div>
                            <div>
                                <img src="app/images/Icon (3).png" alt="Icon" class='icon'>
                                <div class='what-we-do-grid-text'>
                                    <p class='what-we-do-grid-heading'>Animal Safety</p>
                                    <p class='what-we-do-grid-text section-paragraph'>Lorem ipsum dolor sit, amet
                                        consectetur adipisicing elit. Saepe enim qui ipsam aspernatur odio pariatur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="app/images/what we do.png" alt="What we do" class='what-we-do-img'>
                </div>
            </div>
        </section>
        <section class='projects-section'>
            <div class='container'>
                <div class='projects-section-text'>
                    <p class='section-heading-border'></p>
                    <div>
                        <p class='section-heading'>Projects we have done</p>
                        <h2 class='heading-2'>We are creating sustainable society, for everyone and forever.</h2>
                    </div>
                </div>
                <div class='projects-container flex-container'>
                    <div class='project'>
                        <img src="app/images/project.png" alt="Project" class='project-img'>
                        <div class="projects-text">
                            <h3 class='project-article-heading'>Mission 40k: Tree plantation</h3>
                            <p class="projects-paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet
                                nemo aperiam omnis. Deleniti, incidunt. Nemo?</p>
                            <button>See more</button>
                        </div>
                    </div>
                    <div class='project'>
                        <img src="app/images/project(1).png" alt="Project" class='project-img'>
                        <div class="projects-text">
                            <h3 class='project-article-heading'>Weekly cleanliness program in city</h3>
                            <p class="projects-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti quas qui impedit, expedita blanditiis magni.</p>
                            <button>See more</button>
                        </div>
                    </div>
                    <div class='project'>
                        <img src="app/images/project(2).png" alt="Project" class='project-img'>
                        <div class="projects-text">
                            <h3 class='project-article-heading'>Wildlife safety program 2021</h3>
                            <p class="projects-paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Libero suscipit necessitatibus, provident obcaecati aperiam cum?</p>
                            <button>See more</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='donations-section'>
            <div class="container flex-container">
                <div class='donation-text'>
                    <p class='heading-2 donations-heading'>How we spend your donations and where it goes</p>
                    <p class='donation-paragraph'>We understand that when you make a donation, you want to know exactly
                        where your money is going and we pledge to be transparent.</p>
                    <div class='chart-percentage flex-container'>
                        <div class='flex-container'>
                            <p class='green-square square'></p>
                            <p class='chart-text'>40% planting trees</p>
                        </div>
                        <div class='flex-container'>
                            <p class='indigo-square square'></p>
                            <p class='chart-text'>35% cleanliness program</p>
                        </div>
                        <div class='flex-container'>
                            <p class='beige-square square'></p>
                            <p class='chart-text'>10% helping people</p>
                        </div>
                        <div class='flex-container'>
                            <p class='yellow-square square'></p>
                            <p class='chart-text'>10% animal safety</p>
                        </div>
                        <div class='flex-container'>
                            <p class='pink-square square'></p>
                            <p class='chart-text'>5% feeding the poor</p>
                        </div>
                    </div>
                </div>
                <div class='donation-chart-container'>
                    <img src="app/images/Chart.png" alt="Donations Chart">
                </div>
            </div>
        </section>
        <?php include 'app/views/volunteer.php'; ?>
        <section class='news-section'>
            <div class="container">
                <div class='news-heading'>
                    <p class='heading-2'>Read our news</p>
                    <p class='news-heading-border'></p>
                </div>
                <div class='news-container flex-container'>
                    <div class='news'>
                        <img src="app/images/Thumbnail.png" alt="news">
                        <div class="news-text">
                            <p class='news-article-heading'>Don't destroy greenary and don't spoil scenary</p>
                            <p class='news-paragraph'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet
                                nemo aperiam omnis. Deleniti, incidunt. Nemo?</p>
                        </div>
                    </div>
                    <div class='news'>
                        <img src="app/images/Thumbnail (1).png" alt="news">
                        <div class="news-text">
                            <p class='news-article-heading'>Is climate change happening faster than expected?</p>
                            <p class='news-paragraph'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
                                quas qui impedit, expedita blanditiis magni.</p>
                        </div>
                    </div>
                    <div class='news'>
                        <img src="app/images/Thumbnail (2).png" alt="news">
                        <div class="news-text">
                            <p class='news-article-heading'>Top 10 facts about wind farms you didn't know'</p>
                            <p class='news-paragraph'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
                                suscipit necessitatibus, provident obcaecati aperiam cum?</p>
                        </div>
                    </div>
                    <div class='news'>
                        <img src="app/images/Thumbnail (3).png" alt="news">
                        <div class="news-text">
                            <p class='news-article-heading'>Our goal is to make water available for everyone</p>
                            <p class='news-paragraph'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
                                suscipit necessitatibus, provident obcaecati aperiam cum?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='events-section'>
            <div class="container">
                <div class='events-section-heading'>
                    <p class='heading-2'>Our Events</p>
                    <p class='events-section-heading-border'></p>
                </div>
                <div class='events-container flex-container'>
                    <div class='event'>
                        <div class="event-content flex-container">
                            <div class="event-date">
                                <p>23</p>
                                <p>sep</p>
                            </div>
                            <div>
                                <div class='event-heading flex-container'>
                                    <p class='event-heading-text'>next events</p>
                                    <p class='event-heading-border'></p>
                                </div>
                                <h3 class="event-title">
                                    Say no to plastic usage and save the planet
                                </h3>
                            </div>
                            <div class='arrow-button'>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="28" cy="28" r="28" fill="white" />
                                    <path
                                        d="M37.4571 28.7071C37.8476 28.3166 37.8476 27.6834 37.4571 27.2929L31.0931 20.9289C30.7026 20.5384 30.0695 20.5384 29.6789 20.9289C29.2884 21.3195 29.2884 21.9526 29.6789 22.3431L35.3358 28L29.6789 33.6569C29.2884 34.0474 29.2884 34.6805 29.6789 35.0711C30.0695 35.4616 30.7026 35.4616 31.0931 35.0711L37.4571 28.7071ZM19.25 29L36.75 29L36.75 27L19.25 27L19.25 29Z"
                                        fill="#1D2130" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class='event'>
                        <div class="event-content flex-container">
                            <div class="event-date">
                                <p>25</p>
                                <p>sep</p>
                            </div>
                            <div>
                                <div class='event-heading flex-container'>
                                    <p class='event-heading-text'>next events</p>
                                    <p class='event-heading-border'></p>
                                </div>
                                <h3 class="event-title">
                                    Weekly cleaning program
                                </h3>
                            </div>
                            <div class='arrow-button'>
                                <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="28" cy="28" r="28" fill="white" />
                                    <path
                                        d="M37.4571 28.7071C37.8476 28.3166 37.8476 27.6834 37.4571 27.2929L31.0931 20.9289C30.7026 20.5384 30.0695 20.5384 29.6789 20.9289C29.2884 21.3195 29.2884 21.9526 29.6789 22.3431L35.3358 28L29.6789 33.6569C29.2884 34.0474 29.2884 34.6805 29.6789 35.0711C30.0695 35.4616 30.7026 35.4616 31.0931 35.0711L37.4571 28.7071ZM19.25 29L36.75 29L36.75 27L19.25 27L19.25 29Z"
                                        fill="#1D2130" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'app/views/footer.php'; ?>
</body>

</html>