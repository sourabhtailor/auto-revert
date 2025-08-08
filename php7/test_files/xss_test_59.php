<?php
// XSS test variation #59
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>