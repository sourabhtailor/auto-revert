<?php
// Eval injection test variation #471
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>