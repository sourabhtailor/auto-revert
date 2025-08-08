<?php
// XSS test variation #649
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>