<?php
// XSS test variation #316
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>