<?php
// XSS test variation #952
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>