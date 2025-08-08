<?php
// XSS test variation #407
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>