<?php
// XSS test variation #1072
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>