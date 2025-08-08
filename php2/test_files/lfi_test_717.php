<?php
// LFI test variation #717
$page = $_GET['page'] ?? 'home.php';
include($page);
?>