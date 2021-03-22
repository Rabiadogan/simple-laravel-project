<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $texts =
            ['Her kalp, kendi içindeki çiçeğin kokusunu verir.'=>'Abdülkadir Geylani',
            'İyi şeyler inandığında, daha iyi şeyler sabrettiğinde ve en iyi şeyler ise hiç vazgeçmediğinde gelir.'=>'La Edri',
            'Dağınık bir masa dağınık bir zihnin işaretidir diyorlar. Peki o zaman boş masa neyi işareti.'=>' Laurence J. Pete',
            'Bizi Netsis değil, LARAVEL kurtaracak !!'=>'Cantürk Değirmenci'
            ];
        $count =0;
        foreach($texts as $ind=>$val) {
            $count++;
            DB::table('texts')->insert([
                'name'=> $val,
                'text'=> $ind,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

    }
}
