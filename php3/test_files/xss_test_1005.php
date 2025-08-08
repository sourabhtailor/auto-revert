<?php
// XSS test variation #1005
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>