<?php
// XSS test variation #1094
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>