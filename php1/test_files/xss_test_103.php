<?php
// XSS test variation #103
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>