<?php
// XSS test variation #425
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>