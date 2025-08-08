<?php
// XSS test variation #561
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>