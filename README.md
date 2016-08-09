```php
$cmd = $builder->setCommand(new Command('git'))
            ->addArgument(new Argument('log'))
            ->addFlag(new Flag('--color'))
            ->addFlag(new Flag('--no-merges'))
            ->addFlag(new Flag('-10'))
            ->addFlag(new Flag('--'))
            ->addArgument(new Argument('./'))
            ->build();
```
```shell
git 'log' --color --no-merges -10 -- './'
```
