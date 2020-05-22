<?php

namespace OpenTelemetry\Meter;

interface Counter
{
    public function add(int $value): void;
}