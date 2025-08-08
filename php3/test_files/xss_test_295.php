<?php
// XSS test variation #295
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>