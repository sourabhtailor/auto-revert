<?php
// XSS test variation #173
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>