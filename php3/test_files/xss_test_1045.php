<?php
// XSS test variation #1045
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>