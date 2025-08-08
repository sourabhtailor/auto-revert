<?php
// XSS test variation #1293
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>