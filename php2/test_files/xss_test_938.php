<?php
// XSS test variation #938
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>