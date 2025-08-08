<?php
// XSS test variation #125
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>