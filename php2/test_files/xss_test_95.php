<?php
// XSS test variation #95
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>