<?php
// XSS test variation #622
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>