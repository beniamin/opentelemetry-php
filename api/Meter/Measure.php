<?php

namespace OpenTelemetry\Meter;

interface Measure
{
    public function record(int $value): void;
}