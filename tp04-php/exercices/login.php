<?php
session_start();

$message = '';
$usernameCorrect = 'admin';
$passwordCorrect = '123456';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === $usernameCorrect && $password === $passwordCorrect) {
        session_regenerate_id(true);
        $_SESSION['username'] = $username;
        $_SESSION['connecte'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $message = 'Identifiants incorrects.';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Connexion</title><link rel="stylesheet" href="css/style.css"></head>
<body>
<div class="container">
<h1>Connexion</h1>
<?php if ($message !== ''): ?><p class="error"><?= htmlspecialchars($message) ?></p><?php endif; ?>
<form method="POST">
<label>Nom d'utilisateur :</label>
<input type="text" name="username" required>
<label>Mot de passe :</label>
<input type="password" name="password" required>
<button type="submit">Se connecter</button>
</form>
<p>Identifiants de test : admin / 123456</p>
</div>
</body></html>