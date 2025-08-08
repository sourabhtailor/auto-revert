<?php
// XSS test variation #111
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>