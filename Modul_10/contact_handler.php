<?php
session_start(); // Mulai session

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email tujuan dan subjek
    $to = "your-email@example.com"; // Ganti dengan alamat email Anda
    $subject = "New Contact Form Submission";

    // Isi email
    $body = "You have received a new message from your contact form.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    // Header email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        // Simpan pesan keberhasilan di session
        $_SESSION['success_message'] = "Pesan Anda berhasil dikirim!";
    } else {
        // Simpan pesan kesalahan di session
        $_SESSION['error_message'] = "Maaf, pesan Anda gagal dikirim. Silakan coba lagi.";
    }

    // Redirect kembali ke halaman contact.php
    header("Location: contact.php");
    exit();
} else {
    // Redirect jika metode tidak valid
    header("Location: contact.php");
    exit();
}
?>
