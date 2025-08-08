<?php
// XSS test variation #1238
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>