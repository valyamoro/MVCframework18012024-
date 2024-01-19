<?php

namespace app\Services;

class BaseService
{
    public function __construct(
        protected BaseRepository $repository,
    ) {}

}
