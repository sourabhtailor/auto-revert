<?php
// XSS test variation #563
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>