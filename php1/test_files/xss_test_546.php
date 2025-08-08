<?php
// XSS test variation #546
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>