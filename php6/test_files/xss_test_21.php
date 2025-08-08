<?php
// XSS test variation #21
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>