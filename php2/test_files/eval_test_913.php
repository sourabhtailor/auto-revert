<?php
// Eval injection test variation #913
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>