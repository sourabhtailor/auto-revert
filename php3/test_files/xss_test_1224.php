<?php
// XSS test variation #1224
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>