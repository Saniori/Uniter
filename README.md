# Uniter - PHP 8.1 Library for quickly unit testing

## Instalation

```bash
composer require s1ptex/uniter
```

## Usage

### First you need to create a cortege of testsв
```php
$Cortege = new \S1ptex\Uniter\Cortege("Test cortege");
```
### Now add test
```php
$Cortege->add("One plus One is Two", function(\S1ptex\Uniter\Test $test){

  $test->assert(1+1 === 2);

});
```
### Print cortege
```php
$Cortege->execute();
```
### Let's run
```bash
php8.1 name_of_file.php
```
