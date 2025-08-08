<?php
// XSS test variation #1419
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>