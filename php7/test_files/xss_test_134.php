<?php
// XSS test variation #134
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>