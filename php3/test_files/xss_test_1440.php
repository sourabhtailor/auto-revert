<?php
// XSS test variation #1440
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>