<?php
// LFI test variation #977
$page = $_GET['page'] ?? 'home.php';
include($page);
?>