<?php
// XSS test variation #965
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>