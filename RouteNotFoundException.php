<?php

namespace app;

class RouteNotFoundException extends \Exception
{
    protected $message = '404 Not Found';
}
