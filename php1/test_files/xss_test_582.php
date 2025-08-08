<?php
// XSS test variation #582
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>