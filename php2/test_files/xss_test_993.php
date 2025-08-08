<?php
// XSS test variation #993
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>