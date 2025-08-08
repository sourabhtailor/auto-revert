<?php
// XSS test variation #11
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>