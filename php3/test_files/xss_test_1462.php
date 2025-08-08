<?php
// XSS test variation #1462
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>