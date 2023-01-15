# ConsoleCommandApp

**Note:** ```i@sosnin-web.ru```  



## Usage

``` bash
$ git clone https://github.com/SosninAnton/ConsoleCommandApp.git
$cd ConsoleCommandApp
$ docker build -t console-command-app .
$ docker run -it console-command-app bash
$ composer install
$ php app.php command_name {verbose,overwrite} [log_file=app.log] {unlimited} [methods={create,update,delete}] [paginate=50] {log}
```

## Task

На базе разработанной библиотеки необходимо создать простое консольное приложение
для демонстрации его работы.
Требования к приложению:
- единая точка входа для запуска из консоли ОС семейства Linux;
- возможность регистрации неограниченного количества команд в приложении.
  Необходимо создать и зарегистрировать в приложении консольную команду, которая на
  вход принимает неограниченное количество аргументов и параметров и выводит их на экран
  в читаемом для пользователя виде.


