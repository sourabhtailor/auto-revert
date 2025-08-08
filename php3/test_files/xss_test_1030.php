<?php
// XSS test variation #1030
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>