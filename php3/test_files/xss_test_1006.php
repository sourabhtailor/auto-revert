<?php
// XSS test variation #1006
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>