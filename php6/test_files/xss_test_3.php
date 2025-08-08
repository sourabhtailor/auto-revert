<?php
// XSS test variation #3
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>