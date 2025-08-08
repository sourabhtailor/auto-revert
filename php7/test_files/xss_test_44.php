<?php
// XSS test variation #44
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>