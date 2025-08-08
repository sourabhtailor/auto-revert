<?php
// XSS test variation #183
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>