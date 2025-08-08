<?php
// Eval injection test variation #1155
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>