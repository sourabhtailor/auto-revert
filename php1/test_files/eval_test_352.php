<?php
// Eval injection test variation #352
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>