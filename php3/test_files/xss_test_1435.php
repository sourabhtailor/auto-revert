<?php
// XSS test variation #1435
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>