<?php
// XSS test variation #837
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>