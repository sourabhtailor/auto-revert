<?php
// LFI test variation #970
$page = $_GET['page'] ?? 'home.php';
include($page);
?>