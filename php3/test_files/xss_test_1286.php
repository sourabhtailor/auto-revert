<?php
// XSS test variation #1286
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>