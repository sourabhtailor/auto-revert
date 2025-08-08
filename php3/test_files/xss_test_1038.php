<?php
// XSS test variation #1038
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>