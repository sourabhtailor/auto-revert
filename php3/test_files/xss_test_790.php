<?php
// XSS test variation #790
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>