<?php
// XSS test variation #603
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>