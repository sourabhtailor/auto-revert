<?php
// XSS test variation #257
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>