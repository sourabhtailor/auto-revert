<?php
// XSS test variation #137
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>