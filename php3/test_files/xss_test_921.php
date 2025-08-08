<?php
// XSS test variation #921
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>