<?php
// XSS test variation #278
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>