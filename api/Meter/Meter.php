<?php

namespace OpenTelemetry\Meter;

interface Meter
{
    public function newCounter(string $name): Counter;
    public function newGauge(string $name): Gauge;
    public function newMeasure(string $name): Measure;
}