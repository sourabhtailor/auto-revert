<?php
// XSS test variation #444
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>