<?php
// LFI test variation #803
$page = $_GET['page'] ?? 'home.php';
include($page);
?>