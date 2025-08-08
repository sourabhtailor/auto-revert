<?php
// LFI test variation #840
$page = $_GET['page'] ?? 'home.php';
include($page);
?>