<!doctype html>
<html lang="fr">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/private/php/header.php');?>
    <body id="body">
        <div id="filter"></div>
        <div id="banner"></div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/private/php/navbar.php');?>
        <main class="container">
            <div class="contact">
                <h1>Contact</h1>
                <p>Feel free to contact me if you want to talk about a project or a work opportunity with my mail
                    <span class="mail"><a href="mailto:contact@louis-gambart.fr">contact@louis-gambart.fr</a></span>
                    or with this form!</p>
                <div class="form">
                    <form action="/private/php/contact.php" method="post">
                        <div class="form-group">
                            <fieldset>
                                <legend>Form</legend>
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="Your name" required>
                                <label for="mail">Mail</label>
                                <input type="email" name="mail" id="mail" placeholder="Your mail" required><br>
                                <label for="message">Message</label>
                                <textarea name="message" id="message" placeholder="Your message" required></textarea>
                            </fieldset>
                        </div><br>
                        <div class="form-group">
                            <button type="submit" class="btn">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <div id="success" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Mail sent!</h2>
                </div>
                <div class="modal-body">
                    <p>Your mail has been sent successfully!</p>
                </div>
            </div>
        </div>
        <div id="failed" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Mail not sent!</h2>
                </div>
                <div class="modal-body">
                    <p>An error occurred while sending your mail, please try again later.</p>
                </div>
            </div>
        </div>
    </body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/private/php/footer.php');?>
    <script src="/private/js/contact.js"></script>
    <?php
    if($_GET['is_send'] == '1'){
        echo "<script>openModal('success');</script>";
    } elseif ($_GET['is_send'] == '0') {
        echo "<script>openModal('failed');</script>";
    }
    ?>
</html>