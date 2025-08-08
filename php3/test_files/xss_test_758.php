<?php
// XSS test variation #758
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>