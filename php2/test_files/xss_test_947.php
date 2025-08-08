<?php
// XSS test variation #947
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>