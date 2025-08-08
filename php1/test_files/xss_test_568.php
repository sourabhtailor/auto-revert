<?php
// XSS test variation #568
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>