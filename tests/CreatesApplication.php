<?php

namespace Tests;

<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Hash;
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

<<<<<<< HEAD
=======
        Hash::setRounds(4);

>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
        return $app;
    }
}
