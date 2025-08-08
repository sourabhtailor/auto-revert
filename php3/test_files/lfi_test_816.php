<?php
// LFI test variation #816
$page = $_GET['page'] ?? 'home.php';
include($page);
?>