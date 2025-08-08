<?php
// XSS test variation #483
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>