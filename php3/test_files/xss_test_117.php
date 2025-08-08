<?php
// XSS test variation #117
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>