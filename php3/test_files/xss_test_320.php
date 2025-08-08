<?php
// XSS test variation #320
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>