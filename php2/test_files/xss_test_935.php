<?php
// XSS test variation #935
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>