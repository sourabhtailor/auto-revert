<?php
// XSS test variation #613
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>