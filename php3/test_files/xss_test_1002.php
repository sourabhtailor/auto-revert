<?php
// XSS test variation #1002
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>