<?php
// XSS test variation #153
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>