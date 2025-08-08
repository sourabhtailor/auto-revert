<?php
// LFI test variation #806
$page = $_GET['page'] ?? 'home.php';
include($page);
?>