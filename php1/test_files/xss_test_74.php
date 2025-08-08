<?php
// XSS test variation #74
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>