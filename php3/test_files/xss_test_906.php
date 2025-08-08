<?php
// XSS test variation #906
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>