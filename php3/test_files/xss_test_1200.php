<?php
// XSS test variation #1200
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>