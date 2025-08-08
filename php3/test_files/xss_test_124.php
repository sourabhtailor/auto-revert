<?php
// XSS test variation #124
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>