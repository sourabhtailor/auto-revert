<?php
// XSS test variation #1049
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>