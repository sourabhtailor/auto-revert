<?php
// XSS test variation #896
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>