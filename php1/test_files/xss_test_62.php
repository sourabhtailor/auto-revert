<?php
// XSS test variation #62
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>