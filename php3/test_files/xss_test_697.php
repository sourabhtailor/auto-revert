<?php
// XSS test variation #697
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>