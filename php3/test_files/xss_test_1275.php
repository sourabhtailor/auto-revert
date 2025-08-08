<?php
// XSS test variation #1275
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>