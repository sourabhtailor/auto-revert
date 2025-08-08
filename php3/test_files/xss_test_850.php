<?php
// XSS test variation #850
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>