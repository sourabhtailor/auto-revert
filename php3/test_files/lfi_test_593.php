<?php
// LFI test variation #593
$page = $_GET['page'] ?? 'home.php';
include($page);
?>