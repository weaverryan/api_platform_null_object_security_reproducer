<?php

namespace App\Tests;

use App\Factory\CakeFactory;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Zenstruck\Browser\Test\HasBrowser;
use Zenstruck\Foundry\Test\Factories;
use Zenstruck\Foundry\Test\ResetDatabase;

class CakeTest extends KernelTestCase
{
    use HasBrowser;
    use Factories;
    use ResetDatabase;

    public function testReadOperation()
    {
        dump('READ operation will dump the Cake object from FlavorVoter');
        $cake = CakeFactory::createOne();

        $this->browser()
            ->get('/api/cakes/'.$cake->getId())
            ->assertStatus(200)
        ;
    }

    public function testWriteOperation()
    {
        dump('WRITE operation will dump null from FlavorVoter');
        dump('More specifically: it will dump null 2x (not sure why twice) then the Cake object during serialization');
        $cake = CakeFactory::createOne();

        $this->browser()
            ->patch('/api/cakes/'.$cake->getId(), [
                'json' => ['flavor' => 'chocolate'],
                'headers' => ['Content-Type' => 'application/merge-patch+json'],
            ])
            ->assertStatus(200)
        ;
    }
}
