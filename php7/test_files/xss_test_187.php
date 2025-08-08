<?php
// XSS test variation #187
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>