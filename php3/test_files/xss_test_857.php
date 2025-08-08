<?php
// XSS test variation #857
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>