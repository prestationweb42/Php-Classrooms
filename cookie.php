<?php
// retenir l'email de la personne connectée pendant 1 an
setcookie(
    'LOGGED_USER',
    'utilisateur@exemple.com',
    [
        'expires' => time() + 365 * 24 * 3600,
        'secure' => true,
        'httponly' => true,
    ]
);
// echo time();
if (isset($_COOKIE['LOGGED_USER'])) {
    echo $_COOKIE['LOGGED_USER'];
}
