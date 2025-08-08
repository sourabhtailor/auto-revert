<?php
// XSS test variation #79
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>