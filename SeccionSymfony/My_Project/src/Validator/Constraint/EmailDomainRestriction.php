<?php

use Symfony\Component\Validator\Constraint;

#[\Attribute]
class EmailDomainRestriction extends Constraint
{
    public string $message = 'El dominio "{{ value }}" no está permitido.';
}
