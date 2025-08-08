<?php
// XSS test variation #380
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>