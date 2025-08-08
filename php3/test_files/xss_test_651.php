<?php
// XSS test variation #651
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>