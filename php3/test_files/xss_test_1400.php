<?php
// XSS test variation #1400
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>