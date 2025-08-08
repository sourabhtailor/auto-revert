<?php
// LFI test variation #1357
$page = $_GET['page'] ?? 'home.php';
include($page);
?>