<?php
// LFI test variation #838
$page = $_GET['page'] ?? 'home.php';
include($page);
?>