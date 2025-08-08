<?php
// XSS test variation #1309
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>