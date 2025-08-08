<?php
// XSS test variation #305
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>