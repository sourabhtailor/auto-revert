<?php
// XSS test variation #1157
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>