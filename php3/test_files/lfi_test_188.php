<?php
// LFI test variation #188
$page = $_GET['page'] ?? 'home.php';
include($page);
?>