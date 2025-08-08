<?php
// XSS test variation #756
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>