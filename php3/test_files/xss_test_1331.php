<?php
// XSS test variation #1331
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>