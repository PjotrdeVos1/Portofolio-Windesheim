<?php


require 'layout/head.php';

?>


    <h1>contact</h1>
    <main>
    <div class="contact-form-container">
        <form class="contact-form" action="" method="POST">
            <h2>Contact Me</h2>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Naam" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Message"required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
    </main>


<?php

require 'layout/footer.php';

?>