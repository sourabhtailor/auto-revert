<?php
// XSS test variation #1197
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>