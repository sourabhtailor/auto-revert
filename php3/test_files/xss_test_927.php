<?php
// XSS test variation #927
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>