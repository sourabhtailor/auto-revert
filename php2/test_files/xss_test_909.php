<?php
// XSS test variation #909
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>