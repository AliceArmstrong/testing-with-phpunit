<?php declare(strict_types=1);

final class Challenge
{
    public function __construct(Email $email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
