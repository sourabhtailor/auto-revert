<?php
// XSS test variation #901
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>