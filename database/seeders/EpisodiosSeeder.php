<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre = ['Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery', 'Houdini: The Master Mystery'];
        $url = ['https://www.youtube.com/watch?v=zipdW_YOM3g', 'https://www.youtube.com/watch?v=JdCZM4pXVXc', 'https://www.youtube.com/watch?v=m4Evnv4u47I', 'https://www.youtube.com/watch?v=2-z-inPmY_8', 'https://www.youtube.com/watch?v=FwG1wYWOsw8', 'https://www.youtube.com/watch?v=QcBHLs5oqO4', 'https://www.youtube.com/watch?v=7m6f5hU4GRo', 'https://www.youtube.com/watch?v=mbtpNixBC90', 'https://www.youtube.com/watch?v=pOUMUwdAXm0', 'https://www.youtube.com/watch?v=AWXIUahu6oU', 'https://www.youtube.com/watch?v=UanFh90kqFE', 'https://www.youtube.com/watch?v=OcbF2_QUpD8', 'https://www.youtube.com/watch?v=cY-AGo9qFoA', 'https://www.youtube.com/watch?v=YaognW69m50', 'https://www.youtube.com/watch?v=noBmF-oxz7g', 'https://www.youtube.com/watch?v=fP7QX3w0sz8', 'https://www.youtube.com/watch?v=IRJ7ahjputo', 'https://www.youtube.com/watch?v=p89lfzLdW4A', 'https://www.youtube.com/watch?v=ztPUbRAW_5A', 'https://www.youtube.com/watch?v=LdRXc2qcXA0'];

        for($i = 0; $i < 20; $i++){
                DB::table('episodios')->insert([
                    'nombre' => $nombre[$i],
                    'url' => $url[$i]
                ]);    
        }
    }
}
