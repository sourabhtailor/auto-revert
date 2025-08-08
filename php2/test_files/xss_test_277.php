<?php
// XSS test variation #277
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>