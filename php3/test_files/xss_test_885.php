<?php
// XSS test variation #885
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>