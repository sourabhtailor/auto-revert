<?php
// XSS test variation #122
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>