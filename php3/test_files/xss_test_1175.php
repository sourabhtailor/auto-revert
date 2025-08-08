<?php
// XSS test variation #1175
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>