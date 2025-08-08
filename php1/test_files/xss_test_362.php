<?php
// XSS test variation #362
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>