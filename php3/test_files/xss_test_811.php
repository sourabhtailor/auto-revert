<?php
// XSS test variation #811
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>