<?php
// XSS test variation #584
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>