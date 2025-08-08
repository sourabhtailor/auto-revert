<?php
// XSS test variation #686
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>