<?php
// Eval injection test variation #279
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>