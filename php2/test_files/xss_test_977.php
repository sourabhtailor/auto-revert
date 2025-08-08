<?php
// XSS test variation #977
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>