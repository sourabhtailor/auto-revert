<?php
// XSS test variation #937
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>