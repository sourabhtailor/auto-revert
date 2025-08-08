<?php
// LFI test variation #51
$page = $_GET['page'] ?? 'home.php';
include($page);
?>