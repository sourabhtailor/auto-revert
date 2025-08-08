<?php
// XSS test variation #719
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>