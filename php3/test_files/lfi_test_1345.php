<?php
// LFI test variation #1345
$page = $_GET['page'] ?? 'home.php';
include($page);
?>