<?php
// XSS test variation #331
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>