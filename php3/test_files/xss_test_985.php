<?php
// XSS test variation #985
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>