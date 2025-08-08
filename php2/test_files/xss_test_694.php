<?php
// XSS test variation #694
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>