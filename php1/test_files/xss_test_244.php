<?php
// XSS test variation #244
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>