<?php
// XSS test variation #884
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>