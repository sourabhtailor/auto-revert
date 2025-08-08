<?php
// XSS test variation #115
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>