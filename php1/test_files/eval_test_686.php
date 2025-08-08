<?php
// Eval injection test variation #686
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>