<?php
// XSS test variation #51
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>