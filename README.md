# API Platform bug reproducer: "object" is null during PATCH security

```
git clone git@github.com:weaverryan/api_platform_null_object_security_reproducer.git
cd api_platform_null_object_security_reproducer
composer install
php bin/phpunit
```

The key detail is the `Cake.flavor` property, which has a `security` expression:

```php
#[ApiProperty(security: 'is_granted("FLAVOR", object)')]
private ?string $flavor = null;
```

The above commands will run 2 test cases:

A) A `GET` operation. In this case, the `object` is the `Cake` object. This is
proven by a `dump()` inside `FlavorVoter`.

B) A `PATCH` operation. In this case, the `object` is `null` during deserialization,
even though there IS an object that it's being deserialized into. This is
proven by a `dump()` inside `FlavorVoter`.
