<?php

setcookie('user', '', time() - 3600, "/", ".adbarn.com", true);
header("Location: /");

?>