<?php
// LFI test variation #167
$page = $_GET['page'] ?? 'home.php';
include($page);
?>