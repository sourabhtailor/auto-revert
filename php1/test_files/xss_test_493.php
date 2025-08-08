<?php
// XSS test variation #493
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>