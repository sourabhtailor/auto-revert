<?php
// XSS test variation #387
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>