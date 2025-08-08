<?php
// LFI test variation #634
$page = $_GET['page'] ?? 'home.php';
include($page);
?>