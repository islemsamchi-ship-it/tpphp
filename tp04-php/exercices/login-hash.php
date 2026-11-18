<?php
session_start();
require_once __DIR__ . '/utilisateur.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === $utilisateur['username'] &&
        password_verify($password, $utilisateur['password'])) {
        session_regenerate_id(true);
        $_SESSION['username'] = $username;
        $_SESSION['connecte'] = true;
        header('Location: dashboard.php');
        exit;
    }
    $message = 'Identifiants incorrects.';
}
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Connexion sécurisée</title></head>
<body>
<h1>Connexion</h1>
<?php if ($message): ?><p><?= htmlspecialchars($message) ?></p><?php endif; ?>
<form method="POST">
<label>Nom d'utilisateur : <input name="username" required></label><br>
<label>Mot de passe : <input type="password" name="password" required></label><br>
<button type="submit">Se connecter</button>
</form>
</body></html>