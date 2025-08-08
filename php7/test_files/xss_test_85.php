<?php
// XSS test variation #85
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>