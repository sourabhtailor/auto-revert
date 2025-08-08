<?php
// XSS test variation #5
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>