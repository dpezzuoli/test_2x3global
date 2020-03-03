<?php

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addClients();
    }
    
    private function addClients(){
        $data = [
            ['email' => 'client1@2x3global.cl'],
            ['email' => 'client2@2x3global.cl'],
            ['email' => 'client3@2x3global.cl']
        ];
        foreach ($data as $key => $value) {
            Client::create($value);
        }
    }
}
