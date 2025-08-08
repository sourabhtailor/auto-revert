<?php
// XSS test variation #1392
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>