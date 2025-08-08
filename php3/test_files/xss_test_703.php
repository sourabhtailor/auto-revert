<?php
// XSS test variation #703
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>