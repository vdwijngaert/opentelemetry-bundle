<?php

namespace GaelReyrol\OpenTelemetryBundle\OpenTelemetry\Trace\TracerProvider;

use OpenTelemetry\SDK\Trace\NoopTracerProvider;
use OpenTelemetry\SDK\Trace\SamplerInterface;
use OpenTelemetry\SDK\Trace\TracerProviderInterface;

final class NoopTracerProviderFactory implements TracerProviderFactoryInterface
{
    public static function create(SamplerInterface $sampler = null, array $processors = null): TracerProviderInterface
    {
        return new NoopTracerProvider();
    }
}