<?php
// XSS test variation #435
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>