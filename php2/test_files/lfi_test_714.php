<?php
// LFI test variation #714
$page = $_GET['page'] ?? 'home.php';
include($page);
?>