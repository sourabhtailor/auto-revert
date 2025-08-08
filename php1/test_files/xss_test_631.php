<?php
// XSS test variation #631
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>