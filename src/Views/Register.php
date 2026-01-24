<?php if (!empty($error)): ?>
<p style="color:red"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form action="<?= BASE_URL ?>/register" method="POST">
    <input type="email" name="email" required>
    <input type="password" name="password" required>
    <input type="password" name="password_confirm" required>

    <button type="submit">Creer</button>
</form>
<a href="<?=  BASE_URL ?>/login">Deja un compte ? Login</a>