<?php
// XSS test variation #1116
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>