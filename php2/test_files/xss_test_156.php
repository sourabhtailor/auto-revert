<?php
// XSS test variation #156
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>