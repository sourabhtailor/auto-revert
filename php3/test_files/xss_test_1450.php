<?php
// XSS test variation #1450
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>