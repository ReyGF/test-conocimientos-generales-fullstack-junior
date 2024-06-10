<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class EmailDomainRestrictionValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!is_string($value)) {
            return;
        }

        $allowedDomains = ['example.com'];
        $emailParts = explode('@', $value);
        $domain = $emailParts[1];

        if (in_array($domain, $allowedDomains)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}
