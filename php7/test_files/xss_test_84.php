<?php
// XSS test variation #84
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>