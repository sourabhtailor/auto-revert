<?php
// LFI test variation #1215
$page = $_GET['page'] ?? 'home.php';
include($page);
?>