<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'name'=>'Xe Cbr-150cc',
                'description'=>'Xe đẹp động cơ 150cc',
                'price'=>4000,
                'categoryId'=>4,
                'images'=>'https://znews-photo-td.zadn.vn/w660/Uploaded/qfrqy/2016_08_23/cbr150r_2016.jpg',
            ],
            [
                'name'=>'Xe wave',
                'description'=>'Xe may số thiết kế đẹp',
                'price'=>1000,
                'categoryId'=>2,
                'images'=>'http://a9.vietbao.vn/images/vn975/oto-xe-may/75241228-wa_1.jpg',
            ],
            [
                'name'=>'Xe Blade',
                'description'=>'Xe may số thiết kế mới ấn tượng',
                'price'=>1500,
                'categoryId'=>2,
                'images'=>'https://autopro56.mediacdn.vn/zoom/430_270/2016/autopro-honda-blade-110-2017-8-1482749348654-0-48-364-595-crop-1482749355846.jpg',
            ],
            [
                'name'=>'Xe Vision',
                'description'=>'Xe Tay ga đẹp động cơ 125cc',
                'price'=>2000,
                'categoryId'=>3,
                'images'=>'https://znews-photo-td.zadn.vn/w660/Uploaded/wyhktpu/2017_10_25/image001_8.jpg',
            ],
            [
                'name'=>'Xe Lead',
                'description'=>'Xe Tay ga đẹp',
                'price'=>2500,
                'categoryId'=>3,
                'images'=>'https://vneconomy.mediacdn.vn/zoom/710_400/oH7EhMZIBrf7WYKWvKXaIbCHgrdT/Image/2015/02/DucTho-5d664.jpg',
            ],
            [
                'name'=>'Xe Tay Ga PCX',
                'description'=>'Xe Tay ga đẹp mạnh mẽ Nnam tính',
                'price'=>2500,
                'categoryId'=>3,
                'images'=>'https://s3.storage.2banh.vn/image/2016/11/ky-thuat-sua-xe-tay-ga-pcx-2010-luc-phat-dien-va-khoi-dong-34005-1478075626-5819a4ea3a855.jpg',
            ],
            [
                'name'=>'Xe Winner',
                'description'=>'Xe côn tay phân khúc 150cc',
                'price'=>3000,
                'categoryId'=>4,
                'images'=>'https://giaxe.2banh.vn/cache/dataupload/products/slides/520_368_5e357a51ce3d6a182dea94c73b023113.jpg',
            ],
            [
                'name'=>'Xe Cbr-150 Trắng',
                'description'=>'Xe côn tay thiết kế giống mô tô',
                'price'=>4000,
                'categoryId'=>4,
                'images'=>'https://motosaigon.vn/wp-content/uploads/2016/05/cbr150-2016-motosaigon-12-1.jpg',
            ],
            [
                'name'=>'Xe Cbr-150 Đen',
                'description'=>'Xe côn tay thiết kế giống mô tô động cơ 150cc',
                'price'=>4000,
                'categoryId'=>4,
                'images'=>'https://znews-photo-td.zadn.vn/w1024/Uploaded/Wagtrb/2015_08_12/1_zing.JPG',
            ],
            [
                'name'=>'Xe Wave RSX-110cc',
                'description'=>'Xe đẹp động cơ 110cc',
                'price'=>1000,
                'categoryId'=>2,
                'images'=>'https://hondaxemay.com.vn/wp-content/uploads/2017/11/RSX-side-view_800x525px.png',
            ],
            [
                'name'=>'Xe SH 150i',
                'description'=>'Xe tay ga đẹp sang trọng',
                'price'=>5000,
                'categoryId'=>3,
                'images'=>'https://danhgiaxe.net/wp-content/uploads/2016/11/honda-sh300i-2017-12.jpg',
            ],
            [
                'name'=>'Xe SH 300',
                'description'=>'Xe tay ga đẹp sang trọng đọng cơ mạnh mẽ.',
                'price'=>10000,
                'categoryId'=>3,
                'images'=>'https://muasamxe.com/wp-content/uploads/2016/12/honda-sh300i-2017-4.jpg',
            ],
            [
                'name'=>'Xe SH 300i',
                'description'=>'Xe tay ga đẹp sang trọng đọng cơ mạnh mẽ.',
                'price'=>10000,
                'categoryId'=>3,
                'images'=>'https://muasamxe.com/wp-content/uploads/2016/12/honda-sh300i-2017-4.jpg',
            ],
            [
                'name'=>'Xe Future-125cc',
                'description'=>'Xe số đẹp thanh lịch',
                'price'=>1500,
                'categoryId'=>2,
                'images'=>'https://hondaxemay.com.vn/wp-content/uploads/2018/04/Th%C6%B0-vi%E1%BB%87n-%E1%BA%A3nh-800x525-7.png',
            ],
            [
                'name'=>'Xe Air-Blade',
                'description'=>'Xe tay ga 125cc đẹp',
                'price'=>2000,
                'categoryId'=>3,
                'images'=>'https://giaxe.2banh.vn/dataupload/products/thumbs/1451289191-86024cad1e83101d97359d7351051156-166-1.png',
            ],
            [
                'name'=>'Xe Sh-mode',
                'description'=>'Xe tay ga Sh đẹp do người việt sản suất',
                'price'=>2500,
                'categoryId'=>3,
                'images'=>'http://cdn.web30s.vn/datafiles/1/khong_xoa/14493234908826_8.jpg',
            ],
            [
                'name'=>'Xe Gold Wing',
                'description'=>'Xe đi đường dài đắt tiền',
                'price'=>20000,
                'categoryId'=>5,
                'images'=>'http://cdn.web30s.vn/datafiles/1/khong_xoa/14493234908826_8.jpg',
            ],
            [
                'name'=>'Xe MSX',
                'description'=>'Xe côn tay mini động cơ 125cc',
                'price'=>2500,
                'categoryId'=>3,
                'images'=>'https://autopro56.mediacdn.vn/zoom/650_365/2017/dscf4436-1502263694274-183-0-1333-2048-crop-1502268651875.jpg',
            ],
            [
                'name'=>'Xe CBR-1000rr',
                'description'=>'Xe mô tô, phân khối lớn dung tich 1000cc',
                'price'=>25000,
                'categoryId'=>5,
                'images'=>'https://file.xemaycugiare.com/2015/10/02/866-309a.jpg',
            ],
            [
                'name'=>'Xe đạp điện',
                'description'=>'Xe đạp điện, nhỏ gọn',
                'price'=>500,
                'categoryId'=>1,
                'images'=>'https://quangminh.vn/image/cache/catalog/product/xe-dap-dien-nijia-lap-rap-1760-700x700-product_popup.jpg',
            ]

        ]);
    }
}
