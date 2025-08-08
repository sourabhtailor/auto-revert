<?php
// XSS test variation #599
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>