<?php
// XSS test variation #1216
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>