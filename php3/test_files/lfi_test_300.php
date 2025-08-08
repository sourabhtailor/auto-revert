<?php
// LFI test variation #300
$page = $_GET['page'] ?? 'home.php';
include($page);
?>