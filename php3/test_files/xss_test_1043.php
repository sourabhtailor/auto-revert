<?php
// XSS test variation #1043
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>