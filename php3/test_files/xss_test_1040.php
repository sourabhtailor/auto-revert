<?php
// XSS test variation #1040
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>