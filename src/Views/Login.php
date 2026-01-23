<?php
// En tout début de Login.php
var_dump(isset($error)); // Vérifiez si $error existe
var_dump($error);        // Vérifiez sa valeur
?>
<h1>Login</h1>

<form method="POST" action="<?= BASE_URL  ?>/login">
    <input type="email" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="password" required>
    <button type="submit">Connexion</button>
</form>