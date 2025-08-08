<?php
// XSS test variation #760
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>