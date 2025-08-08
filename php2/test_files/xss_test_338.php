<?php
// XSS test variation #338
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>