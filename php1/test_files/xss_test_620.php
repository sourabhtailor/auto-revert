<?php
// XSS test variation #620
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>