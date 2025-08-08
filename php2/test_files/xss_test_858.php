<?php
// XSS test variation #858
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>