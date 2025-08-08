<?php
// XSS test variation #849
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>