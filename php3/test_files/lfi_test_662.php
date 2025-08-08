<?php
// LFI test variation #662
$page = $_GET['page'] ?? 'home.php';
include($page);
?>