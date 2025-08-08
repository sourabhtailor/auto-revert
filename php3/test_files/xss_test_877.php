<?php
// XSS test variation #877
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>