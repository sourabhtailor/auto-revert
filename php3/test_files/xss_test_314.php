<?php
// XSS test variation #314
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>