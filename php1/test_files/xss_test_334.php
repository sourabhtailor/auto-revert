<?php
// XSS test variation #334
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>