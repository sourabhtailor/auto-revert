<?php
// XSS test variation #1327
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>