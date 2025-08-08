<?php
// XSS test variation #505
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>