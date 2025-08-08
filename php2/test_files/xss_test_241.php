<?php
// XSS test variation #241
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>