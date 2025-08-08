<?php
// XSS test variation #393
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>