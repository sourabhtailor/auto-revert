<?php
// XSS test variation #237
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>