<?php
// XSS test variation #964
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>