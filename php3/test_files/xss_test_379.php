<?php
// XSS test variation #379
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>