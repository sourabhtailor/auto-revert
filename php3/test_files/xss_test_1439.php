<?php
// XSS test variation #1439
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>