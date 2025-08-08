<?php
// XSS test variation #487
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>