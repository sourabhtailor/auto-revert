<?php
// LFI test variation #573
$page = $_GET['page'] ?? 'home.php';
include($page);
?>