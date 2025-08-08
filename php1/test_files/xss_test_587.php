<?php
// XSS test variation #587
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>