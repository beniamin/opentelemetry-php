<?php

namespace OpenTelemetry\Meter;

interface Gauge
{
    public function set(int $value): void;
}