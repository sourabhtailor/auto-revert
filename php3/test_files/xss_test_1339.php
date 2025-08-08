<?php
// XSS test variation #1339
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>