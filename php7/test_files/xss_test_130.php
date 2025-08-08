<?php
// XSS test variation #130
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>