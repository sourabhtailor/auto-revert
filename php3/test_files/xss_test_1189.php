<?php
// XSS test variation #1189
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>