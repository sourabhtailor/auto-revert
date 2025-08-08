<?php
// Eval injection test variation #644
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>