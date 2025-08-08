<?php
// LFI test variation #878
$page = $_GET['page'] ?? 'home.php';
include($page);
?>