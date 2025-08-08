<?php
// XSS test variation #556
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>