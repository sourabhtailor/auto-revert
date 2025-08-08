<?php
// XSS test variation #174
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>