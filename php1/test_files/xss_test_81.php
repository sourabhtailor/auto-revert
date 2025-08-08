<?php
// XSS test variation #81
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>