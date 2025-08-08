<?php
// XSS test variation #1196
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>