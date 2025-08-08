<?php
// Eval injection test variation #51
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>