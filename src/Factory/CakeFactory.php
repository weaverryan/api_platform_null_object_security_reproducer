<?php

namespace App\Factory;

use App\Entity\Cake;
use App\Repository\CakeRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Cake>
 *
 * @method        Cake|Proxy                     create(array|callable $attributes = [])
 * @method static Cake|Proxy                     createOne(array $attributes = [])
 * @method static Cake|Proxy                     find(object|array|mixed $criteria)
 * @method static Cake|Proxy                     findOrCreate(array $attributes)
 * @method static Cake|Proxy                     first(string $sortedField = 'id')
 * @method static Cake|Proxy                     last(string $sortedField = 'id')
 * @method static Cake|Proxy                     random(array $attributes = [])
 * @method static Cake|Proxy                     randomOrCreate(array $attributes = [])
 * @method static CakeRepository|RepositoryProxy repository()
 * @method static Cake[]|Proxy[]                 all()
 * @method static Cake[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Cake[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Cake[]|Proxy[]                 findBy(array $attributes)
 * @method static Cake[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Cake[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class CakeFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'flavor' => self::faker()->text(255),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Cake $cake): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Cake::class;
    }
}
