<?php
require __DIR__."/core/config.php";
require __DIR__."/core/connection.php";
require __DIR__."/core/JalaliDate.class.php";
require __DIR__."/core/DB.class.php";
require __DIR__."/core/function.php";
getHeader();
Router($routes);

getFooter();