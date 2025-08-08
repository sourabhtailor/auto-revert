<?php
// XSS test variation #1341
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>