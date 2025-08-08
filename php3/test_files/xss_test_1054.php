<?php
// XSS test variation #1054
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>