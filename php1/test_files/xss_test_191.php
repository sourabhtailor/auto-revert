<?php
// XSS test variation #191
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>