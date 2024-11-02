<?php


require 'layout/head.php';

?>

    <main>
    <div class="contact-form-container">
        <form class="contact-form" action="/contact" method="POST">
            <h2>Contact Me</h2>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Naam" required><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required><br>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Message" rows="5" cols="15" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
    </main>


<?php

require 'layout/footer.php';

?>