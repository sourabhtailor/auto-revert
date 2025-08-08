<?php
// XSS test variation #604
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>