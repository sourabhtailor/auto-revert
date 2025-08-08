<?php
// LFI test variation #241
$page = $_GET['page'] ?? 'home.php';
include($page);
?>