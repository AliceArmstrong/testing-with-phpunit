<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ChallengeTest extends TestCase
{
    public function testCanBeCreated(): void
    {
        $email = Email::fromString('test@test.com');
        $user = new Challenge($email);

        $this->assertInstanceOf(
            Challenge::class,
            $user
        );
    }

    public function testHasCorrectEmail(): void
    {

    }

    public function testCannotBeCreatedWithInvalidEmail(): void
    {

    }
}
