<?php
// Eval injection test variation #520
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>