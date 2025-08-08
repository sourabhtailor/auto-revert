<?php
// XSS test variation #199
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>