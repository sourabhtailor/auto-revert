<?php
// XSS test variation #617
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>