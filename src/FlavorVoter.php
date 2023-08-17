<?php

namespace App;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class FlavorVoter extends Voter
{
    protected function supports(string $attribute, mixed $subject): bool
    {
        if ($attribute === 'FLAVOR') {
            dump($subject);

            return true;
        }

        return false;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        return true;
    }
}
