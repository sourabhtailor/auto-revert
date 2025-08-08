<?php
// XSS test variation #349
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>