<?php
// LFI test variation #871
$page = $_GET['page'] ?? 'home.php';
include($page);
?>