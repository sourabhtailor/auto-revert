<?php
// XSS test variation #648
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>