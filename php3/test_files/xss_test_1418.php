<?php
// XSS test variation #1418
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>