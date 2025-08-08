<?php
// XSS test variation #1371
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>