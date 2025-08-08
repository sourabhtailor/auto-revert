<?php
// XSS test variation #1403
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>