<?php
// XSS test variation #119
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>