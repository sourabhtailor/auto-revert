<?php
// XSS test variation #780
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>