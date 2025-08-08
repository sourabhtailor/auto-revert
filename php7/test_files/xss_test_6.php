<?php
// XSS test variation #6
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>