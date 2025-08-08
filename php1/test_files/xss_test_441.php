<?php
// XSS test variation #441
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>