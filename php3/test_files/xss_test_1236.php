<?php
// XSS test variation #1236
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>