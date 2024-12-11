<section class="main_container main_section">
    <div class="section_contact">
        <h1>Kontaktformular</h1>
        <form name="contactForm" onsubmit="sendMail(event)" method="POST">
            <input name="name" placeholder="Dein Name" required>
            <textarea name="message" placeholder="Deine Nachricht an uns" required></textarea>
            <div class="contact_actions">
                <button class="button-green" type="submit" title="Nachricht senden">Nachricht senden</button>
            </div>
        </form>
    </div>
</section>

<div onclick="closeInfo()" id="contact_overlay" class="contact_overlay hide">
    <div onclick="closeInfo()" id="contact_dialog" class="contact_dialog">
    </div>
</div>