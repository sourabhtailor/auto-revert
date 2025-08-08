<?php
// LFI test variation #469
$page = $_GET['page'] ?? 'home.php';
include($page);
?>