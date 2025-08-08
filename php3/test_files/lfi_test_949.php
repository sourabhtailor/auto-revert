<?php
// LFI test variation #949
$page = $_GET['page'] ?? 'home.php';
include($page);
?>