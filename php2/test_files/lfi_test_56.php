<?php
// LFI test variation #56
$page = $_GET['page'] ?? 'home.php';
include($page);
?>