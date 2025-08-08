<?php
// XSS test variation #54
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>