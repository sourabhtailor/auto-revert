<?php
// XSS test variation #215
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>