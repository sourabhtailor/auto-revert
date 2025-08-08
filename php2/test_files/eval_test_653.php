<?php
// Eval injection test variation #653
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>