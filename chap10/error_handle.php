<?php
set_exception_handler(function (Throwable $e) {
    require_once __DIR__ . '/my_error.html';
});

throw new Exception('MyException');
