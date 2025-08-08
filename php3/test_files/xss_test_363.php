<?php
// XSS test variation #363
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>