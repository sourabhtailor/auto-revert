<?php
// LFI test variation #695
$page = $_GET['page'] ?? 'home.php';
include($page);
?>