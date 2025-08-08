<?php
// XSS test variation #982
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>