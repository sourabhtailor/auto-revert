<?php
// XSS test variation #466
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>