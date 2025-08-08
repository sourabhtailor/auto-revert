<?php
// XSS test variation #597
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>