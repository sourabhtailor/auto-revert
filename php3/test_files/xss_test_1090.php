<?php
// XSS test variation #1090
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>