<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sayfalar = ['Hakkımızda','İçerikler','Kariyer'];
        $count=0;
        foreach ($sayfalar as $sayfa) {
            $count++;
            DB::table('pages')->insert([
                'title'=>$sayfa,
                'slug'=>Str::slug($sayfa),
                'image'=>'https://cdnuploads.aa.com.tr/uploads/Contents/2019/11/07/thumbs_b_c_41b5558fd31337b726ff6ab90497f763.jpg?v=125232',
                'content'=>'What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into
                            electronic typesetting, remaining essentially unchanged. It was popularised in the
                            1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                            recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'order'=>$count,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

    }
}
