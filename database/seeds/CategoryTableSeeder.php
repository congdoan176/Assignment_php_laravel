<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Xe Đạp Điện',
                'description'=>'Xe đạp điện',
                'images'=>'https://xedien.com.vn/upimages/articles/avatar/xe-dap-dien-honda-a6.jpg'
            ],
            [
                'id'=>2,
                'name'=>'Xe Máy Số',
                'description'=>'Xe số động cơ từ 100cc-125cc',
                'images'=>'https://autopro56.mediacdn.vn/zoom/430_270/2016/autopro-honda-blade-110-2017-8-1482749348654-0-48-364-595-crop-1482749355846.jpg'
            ],
            [
                'id'=>3,
                'name'=>'Xe Tay Ga',
                'description'=>'Xe có hộp số tự động, dung tích xi lanh 125cc-150cc',
                'images'=>'https://vnn-imgs-f.vgcloud.vn/2018/03/07/08/xe-tay-ga-2.jpg'
            ]
            ,
            [
                'id'=>4,
                'name'=>'Xe Côn Tay',
                'description'=>'Xe côn tay dung tich xi lanh 135cc-165cc',
                'images'=>'http://www.otoxemay.vn/uploads/120UID1441874984/files/medium/mau-xe-con-tay-anh-chinh.jpg'
            ],
            [
                'id'=>5,
                'name'=>'Xe Mô Tô',
                'description'=>'Xe thể thao mạnh mẽ.',
                'images'=>'https://znews-photo-td.zadn.vn/w660/Uploaded/qfrqy/2016_08_23/cbr150r_2016.jpg'
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
