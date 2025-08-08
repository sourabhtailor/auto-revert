<?php
// LFI test variation #653
$page = $_GET['page'] ?? 'home.php';
include($page);
?>