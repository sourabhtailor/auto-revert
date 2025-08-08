<?php
// XSS test variation #702
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>