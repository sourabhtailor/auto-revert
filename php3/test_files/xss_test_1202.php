<?php
// XSS test variation #1202
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>