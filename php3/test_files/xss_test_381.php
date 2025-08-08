<?php
// XSS test variation #381
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>