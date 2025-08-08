<?php
// XSS test variation #147
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>