<?php
// LFI test variation #787
$page = $_GET['page'] ?? 'home.php';
include($page);
?>