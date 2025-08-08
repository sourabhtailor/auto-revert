<?php
// XSS test variation #882
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>