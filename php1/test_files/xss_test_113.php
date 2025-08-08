<?php
// XSS test variation #113
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>