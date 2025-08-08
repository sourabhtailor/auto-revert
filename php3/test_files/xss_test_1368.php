<?php
// XSS test variation #1368
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>