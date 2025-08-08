<?php
// XSS test variation #2
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>