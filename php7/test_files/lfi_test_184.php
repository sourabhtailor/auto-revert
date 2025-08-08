<?php
// LFI test variation #184
$page = $_GET['page'] ?? 'home.php';
include($page);
?>