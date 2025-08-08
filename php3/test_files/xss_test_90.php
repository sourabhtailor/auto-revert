<?php
// XSS test variation #90
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>