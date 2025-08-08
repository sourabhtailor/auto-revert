<?php
// XSS test variation #893
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>