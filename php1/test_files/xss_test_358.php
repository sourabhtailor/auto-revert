<?php
// XSS test variation #358
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>