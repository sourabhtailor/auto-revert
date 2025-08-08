<?php
// XSS test variation #1067
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>