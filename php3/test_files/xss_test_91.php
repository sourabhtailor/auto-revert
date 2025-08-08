<?php
// XSS test variation #91
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>