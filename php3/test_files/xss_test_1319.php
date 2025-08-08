<?php
// XSS test variation #1319
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>