<?php
// XSS test variation #966
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>