<?php
// XSS test variation #1032
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>