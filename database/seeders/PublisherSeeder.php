<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Publisher::factory()->count(10)->create();

        $publishers = ['ချစ်ဉီးညို','ခင်ခင်ထူး','မောင်ထွန်းသူ','ဂျူး','မြသန်းတင့်','အောင်သင်း','ဂျာနယ်ကျော်မမလေး',
        'စိူးသန်း','ဒေါက်တာသူရိန်လှိုင်ဝင်း','တင်မောင်မြင့်'];
        $arr = [];
        
       foreach($publishers as $publisher){
             $arr[] = [
                'name' => $publisher
             ];
       }
       Publisher::insert($arr);
    }
}
