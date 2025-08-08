<?php
// XSS test variation #346
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>