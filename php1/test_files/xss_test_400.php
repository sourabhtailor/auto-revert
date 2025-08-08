<?php
// XSS test variation #400
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>