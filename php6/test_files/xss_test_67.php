<?php
// XSS test variation #67
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>