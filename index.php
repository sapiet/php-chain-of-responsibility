<?php

require_once 'users.php';
require_once 'AvatarManager.php';
require_once 'handlers/HandlerInterface.php';
require_once 'handlers/SelfHandler.php';
require_once 'handlers/FacebookHandler.php';
require_once 'handlers/GravatarHandler.php';

$avatarManager = new AvatarManager([
    new SelfHandler(),
    new FacebookHandler(),
    new GravatarHandler()
]);

?>
<html>
    <head>
        <title>Chain Of Responsibility</title>
        <style>
            img {
                vertical-align: middle;
            }
        </style>
    </head>
    <body>
        <?php foreach ($users as $user): ?>
            <img src="<?= $avatarManager->getForUser($user) ?>" alt="<?= $user['name'] ?>" width="120">
            <span><?= $user['name'] ?></span>
        <?php endforeach ?>
    </body>
</html>
