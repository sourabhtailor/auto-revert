<?php
// Eval injection test variation #842
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>