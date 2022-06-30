<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Comic;
class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = config('comics');

        foreach($datas as $data){
            $comic = new Comic;
            $comic->title = $data->title;
            $comic->image = $data->image;
            $comic->type = $data->type;
            $comic->slug = Str::slug($data->title, '-');
            $comic->save();

        }
    }
}
