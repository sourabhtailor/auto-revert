<?php
// XSS test variation #229
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>