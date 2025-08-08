<?php
// XSS test variation #310
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>