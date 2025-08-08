<?php
// LFI test variation #242
$page = $_GET['page'] ?? 'home.php';
include($page);
?>