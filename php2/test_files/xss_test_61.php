<?php
// XSS test variation #61
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>