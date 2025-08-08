<?php
// XSS test variation #302
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>