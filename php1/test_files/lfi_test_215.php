<?php
// LFI test variation #215
$page = $_GET['page'] ?? 'home.php';
include($page);
?>