<?php
// XSS test variation #228
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>