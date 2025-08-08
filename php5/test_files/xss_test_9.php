<?php
// XSS test variation #9
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>