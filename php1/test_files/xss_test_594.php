<?php
// XSS test variation #594
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>