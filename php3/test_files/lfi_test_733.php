<?php
// LFI test variation #733
$page = $_GET['page'] ?? 'home.php';
include($page);
?>