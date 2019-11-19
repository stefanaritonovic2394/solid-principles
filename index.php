<?php

    declare(strict_types = 1);
    require 'vendor/autoload.php';

    use SRP\User;
    use SRP\DB;

    use OCP\AreaCalculator;
    use OCP\Rectangle;
    use OCP\Square;

    use LSP\BookDelivery;
    use LSP\HardcoverDelivery;

    use LSP\TrasportationVehicle;
    //use LSP\Car;
    use LSP\Bicycle;

    use ISP\Car;
    use ISP\FutureCar;

    use DIP\MessageSender;
    use DIP\SmtpMailer;

    /******** Single Responsibility ********/
    // $user = new User('stefan', 'stefan@gmail.com');
    // $db = new DB;
    // $db->store($user);
    // echo "<strong>Name: </strong>" . $user->getName() . "<br>";
    // echo "<strong>Email: </strong>" . $user->getEmail();

    /******** Open-Close ********/
    // $rectangle = [
    //     new Rectangle(10, 5)
    // ];

    // $square = [
    //     new Square(5)
    // ];

    // $rectArea = new AreaCalculator($rectangle);
    // $squareArea = new AreaCalculator($square);
    // echo $squareArea->sum();

    /******** Liskov Substitution ********/
    // $hardDel = new HardcoverDelivery('Book1', 1);
    // echo $hardDel->getDeliveryLocations();
    // $transport = new TrasportationVehicle('Audi', 200);
    // $car = new Car('Renault', 150);
    // $bicycle = new Bicycle('BMX', 50);
    // echo $car->startEngine();

    /******** Interface Segregation ********/
    // $car = new Car;
    // $futureCar = new FutureCar;
    // echo $car->drive() . "<br>";
    // echo $futureCar->fly();

    /******** Dependency Inversion ********/
    $smtp = new SmtpMailer;
    $messageSender = new MessageSender($smtp);
    echo $smtp->send();
