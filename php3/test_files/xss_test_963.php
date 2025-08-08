<?php
// XSS test variation #963
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>