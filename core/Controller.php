<?php

namespace app\core;

abstract class Controller
{
    public function __construct(
        protected PDOConnection $connection,
    ) {}
}