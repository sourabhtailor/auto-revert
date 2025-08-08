<?php
// XSS test variation #951
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>