<?php
// XSS test variation #101
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>