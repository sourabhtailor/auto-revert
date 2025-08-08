<?php
// XSS test variation #341
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>