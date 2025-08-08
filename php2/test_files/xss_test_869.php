<?php
// XSS test variation #869
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>