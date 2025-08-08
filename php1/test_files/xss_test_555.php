<?php
// XSS test variation #555
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>