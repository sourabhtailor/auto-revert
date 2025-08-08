<?php
// XSS test variation #224
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>