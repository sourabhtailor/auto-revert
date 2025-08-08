<?php
// XSS test variation #953
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>