<?php
// LFI test variation #437
$page = $_GET['page'] ?? 'home.php';
include($page);
?>