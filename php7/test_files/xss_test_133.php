<?php
// XSS test variation #133
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>