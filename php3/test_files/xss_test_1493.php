<?php
// XSS test variation #1493
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>