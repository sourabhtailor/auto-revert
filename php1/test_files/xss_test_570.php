<?php
// XSS test variation #570
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>