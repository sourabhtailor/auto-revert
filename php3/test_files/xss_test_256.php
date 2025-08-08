<?php
// XSS test variation #256
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>