<?php
// XSS test variation #1061
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>