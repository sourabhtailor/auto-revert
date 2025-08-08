<?php
// XSS test variation #730
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>