<?php
// XSS test variation #129
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>