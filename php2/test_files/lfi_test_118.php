<?php
// LFI test variation #118
$page = $_GET['page'] ?? 'home.php';
include($page);
?>