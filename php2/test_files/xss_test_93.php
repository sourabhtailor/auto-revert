<?php
// XSS test variation #93
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>