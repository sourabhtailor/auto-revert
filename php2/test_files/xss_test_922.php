<?php
// XSS test variation #922
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>