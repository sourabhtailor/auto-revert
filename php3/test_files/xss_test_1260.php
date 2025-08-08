<?php
// XSS test variation #1260
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>