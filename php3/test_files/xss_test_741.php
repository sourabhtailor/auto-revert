<?php
// XSS test variation #741
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>