<?php
// XSS test variation #367
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>