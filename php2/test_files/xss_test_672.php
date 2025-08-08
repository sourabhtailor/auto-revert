<?php
// XSS test variation #672
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>