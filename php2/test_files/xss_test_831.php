<?php
// XSS test variation #831
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>