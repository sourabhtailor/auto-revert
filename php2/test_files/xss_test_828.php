<?php
// XSS test variation #828
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>