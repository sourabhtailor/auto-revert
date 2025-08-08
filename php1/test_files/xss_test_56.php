<?php
// XSS test variation #56
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>