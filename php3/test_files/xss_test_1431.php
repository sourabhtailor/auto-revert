<?php
// XSS test variation #1431
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>