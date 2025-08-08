<?php
// LFI test variation #820
$page = $_GET['page'] ?? 'home.php';
include($page);
?>