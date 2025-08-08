<?php
// XSS test variation #1136
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>