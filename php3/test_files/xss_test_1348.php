<?php
// XSS test variation #1348
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>