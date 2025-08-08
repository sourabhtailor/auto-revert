<?php
// XSS test variation #960
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>