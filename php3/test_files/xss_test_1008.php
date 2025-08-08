<?php
// XSS test variation #1008
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>