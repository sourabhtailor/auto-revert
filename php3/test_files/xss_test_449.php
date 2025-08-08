<?php
// XSS test variation #449
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>