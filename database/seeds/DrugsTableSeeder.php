<?php

use Illuminate\Database\Seeder;

class DrugsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('drugs')->delete();

        $drugs = array(
            ['id' => '1', 'name' => 'ADRENALINE', 'dci_id' => 1, 'category_id' => 1, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['id' => '2', 'name' => 'ASPEGIC', 'dci_id' => 2, 'category_id' => 2, 'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['id' => '3', 'name' => 'ATROPINE', 'dci_id' => 3, 'category_id' => 1, 'created_at' => new DateTime(), 'updated_at' => new DateTime()]
        );

        // Uncomment the below to run the seeder
        DB::table('drugs')->insert($drugs);
    }
}
