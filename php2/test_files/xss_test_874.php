<?php
// XSS test variation #874
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>