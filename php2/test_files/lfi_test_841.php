<?php
// LFI test variation #841
$page = $_GET['page'] ?? 'home.php';
include($page);
?>