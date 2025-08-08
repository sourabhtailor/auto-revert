<?php
// LFI test variation #176
$page = $_GET['page'] ?? 'home.php';
include($page);
?>