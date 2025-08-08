<?php
// XSS test variation #1204
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>