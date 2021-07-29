<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Áo sơ mi Thom Browne',
                'price' => 10000,
                'thumbnail' => 'https://thombrownevn.files.wordpress.com/2018/04/5138c-30729448_580300665663817_1168688939435819008_n.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'Quần âu Thom Browne',
                'price' => 20000,
                'thumbnail' => 'https://product.hstatic.net/1000349804/product/6f523080bd055e5b0714_master.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'Dép Crocs',
                'price' => 30000,
                'thumbnail' => 'http://www.depcrocs.vn/upload/product/dep-suc-crocs-baya-kids-unisex-mau-xanh-ngoc23003.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'name' => 'Giày Guuci',
                'price' => 40000,
                'thumbnail' => 'https://capvirgo.com/wp-content/uploads/2020/06/1557752834_3518713269_3.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'name' => 'Mũ Dior',
                'price' => 1000,
                'thumbnail' => 'https://alltop.vn/backend/media/images/posts/432/Cua_hang_non_Ninh_Kieu-16714.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'name' => 'Quần Dsquared',
                'price' => 1000000,
                'thumbnail' => 'https://vn-test-11.slatic.net/p/09575ff4662da5e2f8c1ec2ced2fe62a.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 7,
                'name' => 'Quần short Burberry',
                'price' => 95000,
                'thumbnail' => 'http://upload.webbnc.vn/upload/web/50/504389/product/2018/06/08/09/18/152844949711.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'name' => 'Ví dài gập LV',
                'price' => 3500000,
                'thumbnail' => 'https://lvnam.com/wp-content/uploads/FB_IMG_1551781314283.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 9,
                'name' => 'Áo Bomber',
                'price' => 1200000,
                'thumbnail' => 'http://ae01.alicdn.com/kf/HTB1MNO3d8Cw3KVjSZR0q6zcUpXaN.jpg_q50.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 10,
                'name' => 'Dép hermes',
                'price' => 30000,
                'thumbnail' => 'https://cf.shopee.vn/file/c287b5c01fb5a2caeadac955e83c8c84',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 11,
                'name' => 'Giày Nike Air Jordan Dior',
                'price' => 1200000,
                'thumbnail' => 'https://luxuo.vn/wp-content/uploads/2020/08/20200804-Shoe.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 12,
                'name' => 'Nike Wmns Air Max 720 Pink Sea Blue',
                'price' => 1200000,
                'thumbnail' => 'https://i.ebayimg.com/images/g/CpsAAOSw4~1cfKPJ/s-l300.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 13,
                'name' => 'Áo phông Gucci',
                'price' => 260000,
                'thumbnail' => 'https://cf.shopee.vn/file/40aa684bbfc14566376fadc2a5441856',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 14,
                'name' => 'Áo polo Gucci',
                'price' => 320000,
                'thumbnail' => 'https://m.hng.io/catalog/product/7/8/780323_navy_1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 15,
                'name' => 'Đồng hồ Richard Mille Replica RM 53-01',
                'price' => 680000000,
                'thumbnail' => 'https://www.richardmille.to/wp-content/uploads/2020/06/RM-53-01-Blue-2.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
