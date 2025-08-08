<?php
// XSS test variation #677
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>