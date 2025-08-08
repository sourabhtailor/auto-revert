<?php
// XSS test variation #1134
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>