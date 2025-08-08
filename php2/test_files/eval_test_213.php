<?php
// Eval injection test variation #213
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>