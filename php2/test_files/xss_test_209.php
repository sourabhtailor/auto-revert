<?php
// XSS test variation #209
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>