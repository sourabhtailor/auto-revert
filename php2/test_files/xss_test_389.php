<?php
// XSS test variation #389
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>