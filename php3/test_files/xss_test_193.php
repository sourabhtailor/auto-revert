<?php
// XSS test variation #193
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>