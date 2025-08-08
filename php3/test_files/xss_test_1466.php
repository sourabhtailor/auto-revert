<?php
// XSS test variation #1466
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>