<?php

namespace Filament\Resources;

use Illuminate\Support\Str;

class Route
{
    public $action;

    public $name;

    public $uri;

    public function __construct($action, $uri, $name)
    {
        $this->action = $action;

        $this->name($name);
        $this->uri($uri);
    }

    public function name($name)
    {
        $this->name = $name;

        return $this;
    }

    public function uri($uri)
    {
        $this->uri = (string) Str::of($uri)->trim('/');

        return $this;
    }
}
