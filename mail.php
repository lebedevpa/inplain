<?php

$recepient = "mail@inplain.ru";
$sitename = "INPLAIN.RU";

$name = trim($_GET["name"]);
$email = trim($_GET["email"]);
$comment = trim($_GET["comment"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nemail: $email \nТекст: $comment";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");