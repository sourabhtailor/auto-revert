<?php
// XSS test variation #1091
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>