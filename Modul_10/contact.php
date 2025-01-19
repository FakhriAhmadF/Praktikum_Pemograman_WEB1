<?php include 'includes/header.php'; ?>
<?php session_start(); ?>
<div class="container my-5">
    <h2>Contact Me</h2>

    <?php if (isset($_SESSION['success_message'])): ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION['success_message'];
            unset($_SESSION['success_message']); 
            ?>
        </div>
    <?php elseif (isset($_SESSION['error_message'])): ?>
        <div class="alert alert-danger">
            <?php
            echo $_SESSION['error_message'];
            unset($_SESSION['error_message']); 
            ?>
        </div>
    <?php endif; ?>

    <p>If you'd like to get in touch, please fill out the form below:</p>
    <form action="contact_handler.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

    <hr class="my-4">

    <div class="social-media">
    <h3>Follow Me</h3>
    <a href="https://wa.me/89507289466" class="social-icon" target="_blank" aria-label="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://www.instagram.com/mfach27?igsh=MWVvc2FpMHAxam5iMg==" class="social-icon" target="_blank" aria-label="Instagram">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="mailto:fakhriahmadf99@gmail.com" class="social-icon" aria-label="Email">
        <i class="fas fa-envelope"></i>
    </a>
</div>
<?php include 'includes/footer.php'; ?>
