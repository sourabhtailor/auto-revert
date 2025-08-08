<?php
// XSS test variation #1377
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>