<?php
// XSS test variation #616
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>