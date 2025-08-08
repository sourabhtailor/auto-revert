<?php
// XSS test variation #1237
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>