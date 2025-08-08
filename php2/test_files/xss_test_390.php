<?php
// XSS test variation #390
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>