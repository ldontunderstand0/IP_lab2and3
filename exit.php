<?php
    setcookie('user', $user['name'], time() - 3600 * 24 * 30, "/");
    header('Location: /index.php');
?>