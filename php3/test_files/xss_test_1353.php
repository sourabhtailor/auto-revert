<?php
// XSS test variation #1353
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>