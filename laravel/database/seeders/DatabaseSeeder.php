<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')-> insert([
        [   'id'=>1,
            'username'=> 'khoa',
            'phone'=>'012345678',
            'fullname' => 'Nguyễn Vũ Anh Khoa',
            'adress'=>'hcm',
            'email'=>'abc@gmail.com',
            'password'=> Hash::make('123456'),
            'Isadmin'=> 0
        ],
        ['id'=>2,
            'username'=> 'admin',
            'phone'=>'0123451232',
            'fullname' => 'admin',
            'adress'=>'hcm',
            'email'=>'esd@gmail.com',
            'password'=> Hash::make('123456'),
            'Isadmin'=> 1
        ],
        ['id'=>3,
            'username'=> 'abc',
            'phone'=>'0123451254',
            'fullname' => 'abc',
            'adress'=>'hcm',
            'email'=>'abc123@gmail.com',
            'password'=> Hash::make('123456'),
            'Isadmin'=> 0
        ],
        ]
    );
    DB::table('product_category')-> insert([
        [
        'category' => 'Men',
        ],
        [    
        'category' => 'Women',
        ],
     [ 
        'category' => 'Couple',
     ],
]);
    DB::table('products')-> insert([
    [
    'id' => 1,
    'productname' => 'G-SHOCK GAE-2100WE-3A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 5290400,
    'size' => '45.5mm',
    'color'=>'yellow',
    'sku' => '001',
    'feature' => true,
    'status'=>1,  
],

[
    'id' => 2,
    'productname' => 'G-SHOCK GA-B2100BNR-1A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 4224000,
    'size' => '45.5mm',
    'color'=>'red',
    'sku' => '002',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 3,
    'productname' => 'G-SHOCK GA-2200BNR-1A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 3415200,
    'size' => '47.1mm',
    'color'=>'red',
    'sku' => '003',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 4,
    'productname' => 'G-SHOCK GA-100BNR-1A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 3158400,
    'size' => '51.2mm',
    'color'=>'red',
    'sku' => '004',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 5,
    'productname' => 'G-SHOCK GA-700BNR-1A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 2823200,
    'size' => '53.4mm',
    'color'=>'red',
    'sku' => '005',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 6,
    'productname' => 'G-SHOCK GAS-100BNR-1A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 4204800,
    'size' => '52.5mm',
    'color'=>'red',
    'sku' => '006',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 7,
    'productname' => 'G-SHOCK GM-5600LC-7',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 5013600,
    'size' => '43.2mm',
    'color'=>'blue',
    'sku' => '007',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 8,
    'productname' => 'G-SHOCK DW-6900GDA-9',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 4491000,
    'size' => '50mm',
    'color'=>'yellow',
    'sku' => '008',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 9,
    'productname' => 'G-SHOCK GM-6900GDA-9',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 6218400,
    'size' => '49.7mm',
    'color'=>'yellow',
    'sku' => '009',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 10,
    'productname' => 'G-SHOCK GW-8230B-9A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 16581600,
    'size' => '50.3mm',
    'color'=>'yellow',
    'sku' => '010',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 11,
    'productname' => 'G-SHOCK MTG-B3000D-1A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 38000000,
    'size' => '50.9mm',
    'color'=>'red',
    'sku' => '011',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 12,
    'productname' => 'G-SHOCK GA-110JAH22-2A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 5700000,
    'size' => '51.2mm',
    'color'=>'black',
    'sku' => '012',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 13,
    'productname' => 'G-SHOCK GA-110SS-1A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 4776800,
    'size' => '51.2mm',
    'color'=>'purple',
    'sku' => '013',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 14,
    'productname' => 'G-SHOCK GA-2110SC-4A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 3119200,
    'size' => '45.4mm',
    'color'=>'blue',
    'sku' => '014',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 15,
    'productname' => 'G-SHOCK GM-2100SS-1A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 7738400,
    'size' => '44.4mm',
    'color'=>'silver',
    'sku' => '015',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 16,
    'productname' => 'G-SHOCK GA-B001-1A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 3395200,
    'size' => '46mm',
    'color'=>'KHOÁNG',
    'sku' => '016',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 17,
    'productname' => 'G-SHOCK GA-B001-4A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 3395200,
    'size' => '46mm',
    'color'=>'KHOÁNG',
    'sku' => '017',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 18,
    'productname' => 'G-SHOCK GA-B001G-1A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 3810400,
    'size' => '51mm',
    'color'=>'KHOÁNG',
    'sku' => '018',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 19,
    'productname' => 'G-SHOCK GA-B001G-2A',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 3810400,
    'size' => '51mm',
    'color'=>'KHOÁNG',
    'sku' => '019',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 20,
    'productname' => 'G-SHOCK DW-5000SS-1',
    'categoryid' => 1,
    'description' => 'Đồng hồ đeo tay nam chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 6159200,
    'size' => '42.8mm',
    'color'=>'KHOÁNG',
    'sku' => '020',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 21,
    'productname' => 'G-SHOCK GM-S110-1A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 5013600,
    'size' => '42mm',
    'color'=>'KHOÁNG',
    'sku' => '021',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 22,
    'productname' => 'G-SHOCK GM-S110B-8A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 5448000,
    'size' => '42mm',
    'color'=>'KHOÁNG',
    'sku' => '022',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 23,
    'productname' => 'G-SHOCK GM-S110LB-2A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 5448000,
    'size' => '42mm',
    'color'=>'KHOÁNG',
    'sku' => '023',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 24,
    'productname' => 'G-SHOCK GM-S110PG-1A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 5448000,
    'size' => '42mm',
    'color'=>'KHOÁNG',
    'sku' => '024',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 25,
    'productname' => 'G-SHOCK GM-S5600LC-7',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 4421600,
    'size' => '38.4mm',
    'color'=>'KHOÁNG',
    'sku' => '025',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 26,
    'productname' => 'G-SHOCK GM-S2100GB-1A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 5803200,
    'size' => '40.4mm',
    'color'=>'KHOÁNG',
    'sku' => '026',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 27,
    'productname' => 'G-SHOCK GM-S2100BR-5A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 5803200,
    'size' => '40.4mm',
    'color'=>'KHOÁNG',
    'sku' => '027',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 28,
    'productname' => 'G-SHOCK GMA-S2100SK-1A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 3395200,
    'size' => '42.9mm',
    'color'=>'KHOÁNG',
    'sku' => '028',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 29,
    'productname' => 'G-SHOCK GMA-S2100SK-2A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 3395200,
    'size' => '42.9mm',
    'color'=>'KHOÁNG',
    'sku' => '029',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 30,
    'productname' => 'G-SHOCK GMA-S2100SK-4A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 3395200,
    'size' => '42.9mm',
    'color'=>'KHOÁNG',
    'sku' => '030',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 31,
    'productname' => 'G-SHOCK GMA-S2100SK-7A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 3395200,
    'size' => '42.9mm',
    'color'=>'KHOÁNG',
    'sku' => '031',
    'feature' => true,
    'status'=>1,  
],

[
    'id' => 32,
    'productname' => 'G-SHOCK GM-S5600BR-5',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 5448000,
    'size' => '38.4mm',
    'color'=>'KHOÁNG',
    'sku' => '032',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 33,
    'productname' => 'G-SHOCK GM-S5600GB-1',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 5448000,
    'size' => '38.4mm',
    'color'=>'yellow',
    'sku' => '033',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 34,
    'productname' => 'G-SHOCK GM-S2100CH-1A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 7799000,
    'size' => '40.4mm',
    'color'=>'red',
    'sku' => '034',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 35,
    'productname' => 'G-SHOCK GMA-S2100WT-1A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 2902400,
    'size' => '42.9mm',
    'color'=>'blue',
    'sku' => '035',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 36,
    'productname' => 'G-SHOCK GMA-S2100WT-7A1',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 2902400,
    'size' => '42.9mm',
    'color'=>'blue',
    'sku' => '036',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 37,
    'productname' => 'G-SHOCK GMA-S2100WT-7A2',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 2902400,
    'size' => '42.9mm',
    'color'=>'white',
    'sku' => '037',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 38,
    'productname' => 'G-SHOCK GMA-S2100-4A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 2605600,
    'size' => '42.9mm',
    'color'=>'pink',
    'sku' => '038',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 39,
    'productname' => 'G-SHOCK GMA-S2100-4A2',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 2605600,
    'size' => '42.9mm',
    'color'=>'pink',
    'sku' => '039',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 40,
    'productname' => 'G-SHOCK GMA-S2100-7A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 2605600,
    'size' => '42.9mm',
    'color'=>'white',
    'sku' => '040',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 41,
    'productname' => 'G-SHOCK GW-8230B-9A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 16581600,
    'size' => '50.3mm',
    'color'=>'yellow',
    'sku' => '041',
    'feature' => true,
    'status'=>1,  
],
[
    'id' => 42,
    'productname' => 'G-SHOCK GWF-A1000RN-8A',
    'categoryid' => 2,
    'description' => 'Đồng hồ đeo tay nữ chính hãng',
    'content' => null,
    'qty' => 20,
    'price' => 27965000,
    'size' => '53.3mm',
    'color'=>'black',
    'sku' => '042',
    'feature' => true,
    'status'=>1,  
],


]);

    DB::table('product_images')-> insert([ 
        [
        'ProductId' => 1,
        'Path' => '1.jpg',
        ],
        [
            'ProductId' => 1,
            'Path' => '1.1.jpg',
        ],
        [
            'ProductId' => 1,
            'Path' => '1.2.jpg',
        ],
        [  
    
            'ProductId' => 2,
            'Path' => '2.jpg',
        ],
        [
            'ProductId' => 2,
            'Path' => '2.1.jpg',
        ],
        [
            'ProductId' => 2,
            'Path' => '2.2.jpg',
        ],
        [
            'ProductId' => 3,
            'Path' => '3.jpg',
        ],
        [
            'ProductId' => 3,
            'Path' => '3.1.jpg',
        ],
        [
            'ProductId' => 3,
            'Path' => '3.2.jpg',
        ],
        [
            'ProductId' => 4,
            'Path' => '4.jpg',
        ],
        [
            'ProductId' => 4,
            'Path' => '4.1.jpg',
        ],
        [
            'ProductId' => 4,
            'Path' => '4.2.jpg',
        ],
        [
            'ProductId' => 5,
            'Path' => '5.jpg',
        ],
        [
            'ProductId' => 5,
            'Path' => '5.1.jpg',
        ],
        [
            'ProductId' => 5,
            'Path' => '5.2.jpg',
        ],
        [
            'ProductId' => 6,
            'Path' => '6.jpg',
        ],
        [
            'ProductId' => 6,
            'Path' => '6.1.jpg',
        ],
        [
            'ProductId' => 6,
            'Path' => '6.2.jpg',
        ],
        [
            'ProductId' => 7,
            'Path' => '7.jpg',
        ],
        [
            'ProductId' => 7,
            'Path' => '7.1.jpg',
        ],
        [
            'ProductId' => 7,
            'Path' => '7.2.jpg',
        ],
        [
            'ProductId' => 8,
            'Path' => '8.jpg',
        ],
        [
            'ProductId' => 8,
            'Path' => '8.1.jpg',
        ],
        [
            'ProductId' => 8,
            'Path' => '8.2.jpg',
        ],
        [
            'ProductId' => 9,
            'Path' => '9.jpg',
        ],
        [
            'ProductId' => 9,
            'Path' => '9.1.jpg',
        ],
        [
            'ProductId' => 9,
            'Path' => '9.2.jpg',
        ],
        [
            'ProductId' => 10,
            'Path' => '10.jpg',
        ],
        [
            'ProductId' => 10,
            'Path' => '10.1.jpg',
        ],
        [
            'ProductId' => 10,
            'Path' => '10.2.jpg',
        ],
        [
            'ProductId' => 11,
            'Path' => '11.jpg',
        ],
        [
            'ProductId' => 11,
            'Path' => '11.1.jpg',
        ],
        [
            'ProductId' => 11,
            'Path' => '11.2.jpg',
        ],
        [
            'ProductId' => 12,
            'Path' => '12.1.jpg',
        ],
        [
            'ProductId' => 12,
            'Path' => '12.2.jpg',
        ],
        [
            'ProductId' => 13,
            'Path' => '13.jpg',
        ],
        [
            'ProductId' => 13,
            'Path' => '13.1.jpg',
        ],
        [
            'ProductId' => 13,
            'Path' => '13.2.jpg',
        ],
        [
            'ProductId' => 14,
            'Path' => '14.jpg',
        ],
        [
            'ProductId' => 14,
            'Path' => '14.1.jpg',
        ],
        [
            'ProductId' => 14,
            'Path' => '14.2.jpg',
        ],
        [
            'ProductId' => 15,
            'Path' => '15.jpg',
        ],
        [
            'ProductId' => 15,
            'Path' => '15.1.jpg',
        ],
        [
            'ProductId' => 15,
            'Path' => '15.2.jpg',
        ],
        [
            'ProductId' => 16,
            'Path' => '16.jpg',
        ],
        [
            'ProductId' => 16,
            'Path' => '16.1.jpg',
        ],
        [
            'ProductId' => 16,
            'Path' => '16.2.jpg',
        ],
        [
            'ProductId' => 17,
            'Path' => '17.jpg',
        ],
        [
            'ProductId' => 17,
            'Path' => '17.1.jpg',
        ],
        [
            'ProductId' => 17,
            'Path' => '17.2.jpg',
        ],
        [
            'ProductId' => 18,
            'Path' => '18.jpg',
        ],
        [
            'ProductId' => 18,
            'Path' => '18.1.jpg',
        ],
        [
            'ProductId' => 18,
            'Path' => '18.2.jpg',
        ],
        [
            'ProductId' => 19,
            'Path' => '19.jpg',
        ],
        [
            'ProductId' => 19,
            'Path' => '19.1.jpg',
        ],
        [
            'ProductId' => 19,
            'Path' => '19.2.jpg',
        ],
        [
            'ProductId' => 20,
            'Path' => '20.jpg',
        ],
        [
            'ProductId' => 20,
            'Path' => '20.1.jpg',
        ],
        [
            'ProductId' => 20,
            'Path' => '20.2.jpg',
        ],
        [
            'ProductId' => 21,
            'Path' => '21.jpg',
        ],
        [
            'ProductId' => 21,
            'Path' => '21.1.jpg',
        ],
        [
            'ProductId' => 21,
            'Path' => '21.2.jpg',
        ],
        [
            'ProductId' => 22,
            'Path' => '22.jpg',
        ],
        [
            'ProductId' => 22,
            'Path' => '22.1.jpg',
        ],
        [
            'ProductId' => 22,
            'Path' => '22.2.jpg',
        ],
        [
            'ProductId' => 23,
            'Path' => '23.jpg',
        ],
        [
            'ProductId' => 23,
            'Path' => '23.1.jpg',
        ],
        [
            'ProductId' => 23,
            'Path' => '23.2.jpg',
        ],
        [
            'ProductId' => 24,
            'Path' => '24.jpg',
        ],
        [
            'ProductId' => 24,
            'Path' => '24.1.jpg',
        ],
        [
            'ProductId' => 24,
            'Path' => '24.2.jpg',
        ],
        [
            'ProductId' => 25,
            'Path' => '25.jpg',
        ],
        [
            'ProductId' => 25,
            'Path' => '25.1.jpg',
        ],
        [
            'ProductId' => 25,
            'Path' => '25.2.jpg',
        ],
        [
            'ProductId' => 26,
            'Path' => '26.jpg',
        ],
        [
            'ProductId' => 26,
            'Path' => '26.1.jpg',
        ],
        [
            'ProductId' => 26,
            'Path' => '26.2.jpg',
        ],
        [
            'ProductId' => 27,
            'Path' => '27.jpg',
        ],
        [
            'ProductId' => 27,
            'Path' => '27.1.jpg',
        ],
        [
            'ProductId' => 27,
            'Path' => '27.2.jpg',
        ],
        [
            'ProductId' => 28,
            'Path' => '28.jpg',
        ],
        [
            'ProductId' => 28,
            'Path' => '28.1.jpg',
        ],
        [
            'ProductId' => 28,
            'Path' => '28.2.jpg',
        ],
        [
            'ProductId' => 29,
            'Path' => '29.jpg',
        ],
        [
            'ProductId' => 29,
            'Path' => '29.1.jpg',
        ],
        [
            'ProductId' => 29,
            'Path' => '29.2.jpg',
        ],
        [
            'ProductId' => 30,
            'Path' => '30.jpg',
        ],
        [
            'ProductId' => 30,
            'Path' => '30.1.jpg',
        ],
        [
            'ProductId' => 30,
            'Path' => '30.2.jpg',
        ],
        [
            'ProductId' => 31,
            'Path' => '31.jpg',
        ],
        [
            'ProductId' => 31,
            'Path' => '31.1.jpg',
        ],
        [
            'ProductId' => 31,
            'Path' => '31.2.jpg',
        ],
        [
            'ProductId' => 32,
            'Path' => '32.jpg',
        ],
        [
            'ProductId' => 32,
            'Path' => '32.1.jpg',
        ],
        [
            'ProductId' => 32,
            'Path' => '32.2.jpg',
        ],
        [
            'ProductId' => 33,
            'Path' => '33.jpg',
        ],
        [
            'ProductId' => 33,
            'Path' => '33.1.jpg',
        ],
        [
            'ProductId' => 33,
            'Path' => '33.2.jpg',
        ],
        [
            'ProductId' => 34,
            'Path' => '34.jpg',
        ],
        [
            'ProductId' => 34,
            'Path' => '34.1.jpg',
        ],
        [
            'ProductId' => 34,
            'Path' => '34.2.jpg',
        ],
        [
            'ProductId' => 35,
            'Path' => '35.jpg',
        ],
        [
            'ProductId' => 35,
            'Path' => '35.1.jpg',
        ],
        [
            'ProductId' => 35,
            'Path' => '35.2.jpg',
        ],
        [
            'ProductId' => 36,
            'Path' => '36.jpg',
        ],
        [
            'ProductId' => 36,
            'Path' => '36.1.jpg',
        ],
        [
            'ProductId' => 36,
            'Path' => '36.2.jpg',
        ],
        [
            'ProductId' => 37,
            'Path' => '37.jpg',
        ],
        [
            'ProductId' => 37,
            'Path' => '37.1.jpg',
        ],
        [
            'ProductId' => 38,
            'Path' => '38.jpg',
        ],
        [
            'ProductId' => 38,
            'Path' => '38.1.jpg',
        ],
        [
            'ProductId' => 38,
            'Path' => '38.2.jpg',
        ],
        [
            'ProductId' => 39,
            'Path' => '39.jpg',
        ],
        [
            'ProductId' => 39,
            'Path' => '39.1.jpg',
        ],
        [
            'ProductId' => 39,
            'Path' => '39.2.jpg',
        ],
        [
            'ProductId' => 40,
            'Path' => '40.jpg',
        ],
        [
            'ProductId' => 40,
            'Path' => '40.1.jpg',
        ],
        [
            'ProductId' => 40,
            'Path' => '40.2.jpg',
        ],
        
        

]);
    DB::table('product_details')-> insert([  
    [
        'productid' => 1,
        'watchFace'=>'KHOÁNG',
        'qty' => 5,
        'strap'=>'nhựa'
    ],
    [
        'productid' => 2,
        'watchFace'=>'KHOÁNG',
        'qty' => 5,
        'strap'=>'nhựa'
    ],
    [
        'productid' => 3,
        'watchFace'=>'KHOÁNG',
        'qty' => 5,
        'strap'=>'nhựa'
    ],
    [
        'productid' => 4,
        'watchFace'=>'KHOÁNG',
        'qty' => 5,
        'strap'=>' nhựa'
    ],
    [
        'productid' => 5,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>' nhựa'
    ],
    [
        'productid' => 6,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>' nhựa'
    ],
    [
        'productid' => 7,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>' nhựa'
    ],
    [
        'productid' => 8,
        'watchFace'=>'KHOÁNG',
        'qty' => 3,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 9,
        'watchFace'=>'KHOÁNG',
        'qty' => 8,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 10,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 11,
        'watchFace'=>'Mặt kính saphia với lớp phủ chống chói',
        'qty' => 4,
        'strap'=>'nhựa composite chia lớp'
    ],
 
    [
        'productid' => 12,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 13,
        'watchFace'=>'KHOÁNG',
        'qty' => 4,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 14,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 15,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 16,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 17,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 18,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 19,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 20,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 21,
        'watchFace'=>'KHOÁNG',
        'qty' => 5,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 22,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 23,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 24,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 25,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 26,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 27,
        'watchFace'=>'KHOÁNG',
        'qty' => 3,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 28,
        'watchFace'=>'KHOÁNG',
        'qty' => 3,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 29,
        'watchFace'=>'KHOÁNG',
        'qty' => 1,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 30,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 31,
        'watchFace'=>'KHOÁNG',
        'qty' => 4,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 32,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 33,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 34,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 35,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 36,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 37,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 38,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 39,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
    [
        'productid' => 40,
        'watchFace'=>'KHOÁNG',
        'qty' => 2,
        'strap'=>'Nhựa'
    ],
]);
    
  //  DB::table('invoice_in_details')-> insert([[]]);
    //DB::table('invoice_in')-> insert([[]]);
    //DB::table('invoice_details')-> insert([[]]);
    //DB::table('invoices')-> insert([[]]);
    

    }
}
