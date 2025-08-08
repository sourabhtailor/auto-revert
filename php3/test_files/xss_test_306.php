<?php
// XSS test variation #306
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>