<?php
// XSS test variation #96
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>