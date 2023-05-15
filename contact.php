<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
</head>

<body>
    <h1>Contactez-nous</h1>
    <form method="post">
       
        <label>Message</label>
        <textarea name="message" required></textarea>
        <input type="submit">
    </form>
    <?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: webmaster@monsite.fr' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h1>Message envoyé depuis l usine numero ....</h1>
       
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('code.nature81@gmail.com', 'Envoi depuis le site', $message, $entete);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>