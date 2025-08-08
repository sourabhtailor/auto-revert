<?php
// XSS test variation #1420
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>