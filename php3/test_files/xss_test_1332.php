<?php
// XSS test variation #1332
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>