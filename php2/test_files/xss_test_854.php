<?php
// XSS test variation #854
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>