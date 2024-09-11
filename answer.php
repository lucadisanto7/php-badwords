<?php

$paragraph = $_GET['paragraph'];
$censored = $_GET['censored'];
$censored_hidden = str_replace($censored, '***', $paragraph);

?>