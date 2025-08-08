<?php
// XSS test variation #126
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>