<?php

namespace Divarsoy\Profiler;


class Profiler
{
    protected $startTime;
    protected $lap;

    public function __construct()
    {
        $this->startTime = $this->getTime();
        $this->lap = $this->startTime;
    }

    public function getElapsedTime(){
        $now = $this->getTime();
        return $now - $this->startTime;
    }

    public function setLap(){
        $this->lap = $this->getTime();
    }

    public function getElapsedLap(){
        $elapsedTime = $this->getTime() - $this->lap;
        $this->lap = $this->getTime();
        return $elapsedTime;
    }

    protected function getTime()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }

}