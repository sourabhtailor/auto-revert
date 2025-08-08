<?php
// XSS test variation #939
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>