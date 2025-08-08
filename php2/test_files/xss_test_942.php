<?php
// XSS test variation #942
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>