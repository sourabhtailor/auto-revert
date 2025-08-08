<?php
// XSS test variation #408
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>