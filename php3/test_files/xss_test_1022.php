<?php
// XSS test variation #1022
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>