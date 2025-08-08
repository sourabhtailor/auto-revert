<?php
// XSS test variation #104
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>