<?php
// XSS test variation #532
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>