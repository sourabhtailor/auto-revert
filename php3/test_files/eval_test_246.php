<?php
// Eval injection test variation #246
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>