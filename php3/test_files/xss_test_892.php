<?php
// XSS test variation #892
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>