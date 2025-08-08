<?php
// XSS test variation #418
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>