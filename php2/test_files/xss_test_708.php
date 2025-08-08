<?php
// XSS test variation #708
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>