<?php
// XSS test variation #87
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>