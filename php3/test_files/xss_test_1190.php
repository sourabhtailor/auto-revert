<?php
// XSS test variation #1190
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>