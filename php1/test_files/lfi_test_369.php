<?php
// LFI test variation #369
$page = $_GET['page'] ?? 'home.php';
include($page);
?>