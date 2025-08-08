<?php
// XSS test variation #1191
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>