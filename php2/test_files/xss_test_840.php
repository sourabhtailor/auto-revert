<?php
// XSS test variation #840
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>