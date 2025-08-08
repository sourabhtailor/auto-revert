<?php
// XSS test variation #1423
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>