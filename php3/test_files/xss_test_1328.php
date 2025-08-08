<?php
// XSS test variation #1328
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>