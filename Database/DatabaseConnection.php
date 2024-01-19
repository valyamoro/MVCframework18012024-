<?php

namespace app\Database;

interface DatabaseConnection
{
    public function connection(): object;

}
