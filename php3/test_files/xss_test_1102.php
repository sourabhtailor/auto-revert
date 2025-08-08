<?php
// XSS test variation #1102
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>