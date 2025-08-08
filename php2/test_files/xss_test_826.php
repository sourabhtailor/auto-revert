<?php
// XSS test variation #826
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>