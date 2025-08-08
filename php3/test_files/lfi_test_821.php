<?php
// LFI test variation #821
$page = $_GET['page'] ?? 'home.php';
include($page);
?>