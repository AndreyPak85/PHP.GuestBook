<?php

$db = @mysqli_connect('localhost', 'root', 'root', 'gb') or die ("Ошибка подключения к БД");
mysqli_set_charset($db, 'utf8') or die ("Ошибка установки кодировки");