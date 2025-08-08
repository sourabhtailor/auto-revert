<?php
// Eval injection test variation #988
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>