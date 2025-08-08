<?php
// XSS test variation #903
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>