<?php
// Eval injection test variation #1471
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>