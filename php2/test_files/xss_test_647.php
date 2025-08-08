<?php
// XSS test variation #647
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>