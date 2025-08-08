<?php
// XSS test variation #554
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>