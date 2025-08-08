<?php
// LFI test variation #727
$page = $_GET['page'] ?? 'home.php';
include($page);
?>