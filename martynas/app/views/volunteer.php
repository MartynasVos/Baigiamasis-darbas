<section class='volunteer-section'>
            <div id="volunteerModal" class="volunteer-modal">
                <div class="volunteer-modal-content">
                    <div class='close-container'>
                        <span class="close">&times;</span>
                    </div>
                    <div class='volunteer-modal-text'>
                        <p class='volunteer-modal-heading'>Join as a volunteer</p>
                        <p class='volunteer-modal-paragraph'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ab eligendi id necessitatibus cum fuga.</p>
                    </div>
                    <form action="index.php" method='post'>
                        <div class='module-form-name flex-container'>
                            <div>
                                <label for="fname">First Name</label><br>
                                <input type="text" id="fname" name="first_name" required>
                            </div>
                            <div>
                                <label for="lname">Last Name</label><br>
                                <input type="text" id="lname" name="last_name" required>
                            </div>
                        </div>
                       <div>
                            <label for="email">Email Id</label><br>
                            <input type="email" id="email" name="email" required>
                        </div>
                       <div>
                            <label for="volunteer-message">Message</label><br>
                            <textarea id="volunteer-message" name="message" placeholder='Type your Message' required></textarea>
                        </div>
                        <button name="volunteer-message" type="submit">Send message</button>
                    </form>
                </div>
            </div>
            <div class="container flex-container">

                <img src="app/images/volunteer.png" alt="Background image">
                <div>
                    <h2 class='volunteer-heading heading-2'>You can contribute to make the enviroment greener!</h2>
                    <div class='volunteer-buttons'>
                        <button class='volunteer-button' id='volunteerButton'>Join as a volunteer</button>
                        <button class='volunteer-donate-button' onclick="location.href='donation.php'">Donate</button>
                    </div>
                </div>
            </div>
        </section>