<?php
// XSS test variation #422
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>