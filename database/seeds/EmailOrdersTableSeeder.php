<?php

use Illuminate\Database\Seeder;

class EmailOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\EmailOrder::class, 5)->create();
    }
}
