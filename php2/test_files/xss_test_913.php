<?php
// XSS test variation #913
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>