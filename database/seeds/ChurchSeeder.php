<?php

use Illuminate\Database\Seeder;

class ChurchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Church::class, 50)->create()->each(function($u) {
              $u->bulletins()->save(factory(App\Bulletin::class)->make());
              $u->events()->save(factory(App\Event::class)->make());
          });
    }
}
