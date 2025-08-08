<?php
// XSS test variation #289
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>