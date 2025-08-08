<?php
// XSS test variation #1029
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>