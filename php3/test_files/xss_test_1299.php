<?php
// XSS test variation #1299
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>