<?php
// XSS test variation #409
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>