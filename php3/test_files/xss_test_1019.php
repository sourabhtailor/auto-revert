<?php
// XSS test variation #1019
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>