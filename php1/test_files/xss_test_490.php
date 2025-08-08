<?php
// XSS test variation #490
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>