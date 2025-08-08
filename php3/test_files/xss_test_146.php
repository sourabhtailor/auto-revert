<?php
// XSS test variation #146
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>