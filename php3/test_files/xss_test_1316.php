<?php
// XSS test variation #1316
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>