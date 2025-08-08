<?php
// XSS test variation #1244
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>