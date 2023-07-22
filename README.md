# Uniter - Быстрое создание юнит тестов

## Создание тестов

### Для начала необходимо создать кортеж тестов
```php
$Cortege = new \S1ptex\Uniter\Cortege("Супер-пупер набор тестов");
```

### Теперь добавим тест

```php
$Cortege->add("Один плюс один равно два", function(\S1ptex\Uniter\Test $test){

  $test->assert(1+1 === 2);

})
```

### Выведем кортеж
```php
$Cortege->execute();
```


