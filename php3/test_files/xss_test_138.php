<?php
// XSS test variation #138
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>