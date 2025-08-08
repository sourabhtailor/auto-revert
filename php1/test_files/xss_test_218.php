<?php
// XSS test variation #218
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>