<?php
// XSS test variation #450
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>