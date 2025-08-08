<?php
// XSS test variation #427
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>