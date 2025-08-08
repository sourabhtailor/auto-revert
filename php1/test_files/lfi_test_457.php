<?php
// LFI test variation #457
$page = $_GET['page'] ?? 'home.php';
include($page);
?>