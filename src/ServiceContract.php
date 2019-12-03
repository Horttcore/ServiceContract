<?php
namespace RalfHortt\ServiceContracts;

interface ServiceContract
{
    public function register(...$args): void;
}
