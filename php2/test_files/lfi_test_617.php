<?php
// LFI test variation #617
$page = $_GET['page'] ?? 'home.php';
include($page);
?>