<?php
// XSS test variation #1105
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>