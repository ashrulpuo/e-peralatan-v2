<?php

use Illuminate\Database\Seeder;

class PeralatanTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peralatan')->insert(
        [
            [
                'peralatan' => 'Screen Projector',
                'model' => 'panasonic',
                'no_asset' => 'JPS/BPA 64/I/09/637',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Screen Projector',
                'model' => 'panasonic',
                'no_asset' => 'JPS/ICT/002003022/R/15/8',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'LCD Projector',
                'model' => 'Hitachi CP-X264',
                'no_asset' => 'JPS/ICT/H/LCD/2010/42',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'LCD Projector',
                'model' => 'Hitachi CP-X264',
                'no_asset' => 'JPS/ICT/H/LCD/2010/43',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Laptop',
                'model' => 'HP PRO BOOK 43415',
                'no_asset' => 'JPS/ICT/H/LAPTOP/2012/61',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Laptop',
                'model' => 'HP PRO BOOK 43415',
                'no_asset' => 'JPS/ICT/H/LAPTOP/2012/62',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Laptop',
                'model' => 'HP PRO BOOK 43415',
                'no_asset' => 'JPS/ICT/H/LAPTOP/2012/63',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Laptop',
                'model' => 'HP PRO BOOK 43415',
                'no_asset' => 'JPS/ICT/H/LAPTOP/2012/64',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Laptop',
                'model' => 'HP PRO BOOK 43415',
                'no_asset' => 'JPS/ICT/H/LAPTOP/2012/65',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Laptop',
                'model' => 'HP PRO BOOK 43415',
                'no_asset' => 'JPS/ICT/H/LAPTOP/2012/66',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Laptop',
                'model' => 'HP PRO BOOK 43415',
                'no_asset' => 'JPS/ICT/H/LAPTOP/2012/67',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Laptop',
                'model' => 'HP PRO BOOK 43415',
                'no_asset' => 'JPS/ICT/H/LAPTOP/2012/68',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Laptop',
                'model' => 'HP PRO BOOK 440 G2v',
                'no_asset' => 'JPS/ICT/001002002/H/15/34',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Laptop',
                'model' => 'HP PRO BOOK 440 G2v',
                'no_asset' => 'JPS/ICT/001002002/H/15/35',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Laptop',
                'model' => 'HP PRO BOOK 440 G2v',
                'no_asset' => 'JPS/ICT/001002002/H/15/36',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Laptop',
                'model' => 'HP PRO BOOK 440 G2v',
                'no_asset' => 'JPS/ICT/001002002/H/15/41',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'LCD Projector',
                'model' => 'Mini Projector Acer C205',
                'no_asset' => 'JPS/ICT/002003045/R/15/1',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Camera',
                'model' => 'Nikon D90',
                'no_asset' => 'JPS/ICT/H/CAMERA/2011/K/32',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Camera',
                'model' => 'Nikon D90',
                'no_asset' => 'JPS/ICT/002006001/H/15/42',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Camera',
                'model' => 'Nikon D90',
                'no_asset' => 'JPS/ICT/002006001/H/15/43',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'LCD Projector',
                'model' => 'Panasonic PT LB51',
                'no_asset' => 'JPS/PK24/1/08/2',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Camera',
                'model' => 'Samsung Galaxy Camera 2',
                'no_asset' => 'JPS/ICT/002006002/R/15/2',
                'status_peralatan' => 0
            ],
            [
                'peralatan' => 'Video Camera',
                'model' => 'Sony NEX-VG20 Pro Video Pack',
                'no_asset' => 'JPS/ICT/H/VIDEOCAM/2012/69',
                'status_peralatan' => 0
            ]
        ]
        );
    }
}
