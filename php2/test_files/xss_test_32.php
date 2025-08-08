<?php
// XSS test variation #32
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>