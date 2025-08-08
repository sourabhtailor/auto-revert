<?php
// Eval injection test variation #355
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>