<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category Camera
        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'SONY A7 III',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '340000',
            'image' => 'media/products/camera_sony_a7_III.jpg',
            'product_detail' => 'Memory 16GB | Battery 2x | Charger + Cable',
            'kode_barang' => 'BRG001',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'SONY A7 II',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '220000',
            'image' => 'media/products/camera_SONY_A7_II.jpg',
            'product_detail' => 'Memory 16GB | Battery 2x | Charger + Cable',
            'kode_barang' => 'BRG002',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'CANON EOS 6D Mark II (WiFi)',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '300000',
            'image' => 'media/products/camera_CANON_EOS_6D(WIFI).jpg',
            'product_detail' => 'Strap | Battery Original | Body Cap | Charger | Power Cable',
            'kode_barang' => 'BRG003',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'CANON EOS 6D (WiFi)',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '300000',
            'image' => 'media/products/camera_CANON_EOS_6D(WIFI).jpg',
            'product_detail' => 'Strap | Battery Original | Body Cap | Charger | Power Cable',
            'kode_barang' => 'BRG004',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'CANON EOS 7D',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '120000',
            'image' => 'media/products/camera_CANON_EOS_7D.jpg',
            'product_detail' => 'Strap | Battery Original | Body Cap | Charger | Power Cable',
            'kode_barang' => 'BRG005',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'CANON EOS 80D',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '160000',
            'image' => 'media/products/camera_CANON_EOS_80D.jpg',
            'product_detail' => 'Strap | Battery Original | Body Cap | Charger | Power Cable',
            'kode_barang' => 'BRG006',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'GOPRO HERO 4',
            'jenis' => 'Silver Edition',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '70000',
            'image' => 'media/products/gopro_hero_4.jpg',
            'product_detail' => '3 Battery + Charge, Monopod Mount, Housing Underwater, Kabel Data, Memory Card 16GB',
            'kode_barang' => 'BRG007',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'GOPRO HERO 4',
            'jenis' => 'Black Edition',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '100000',
            'image' => 'media/products/gopro_hero_4.jpg',
            'product_detail' => '3 Battery + Charge, Monopod Mount, Housing Underwater, Kabel Data, Memory Card 16GB',
            'kode_barang' => 'BRG008',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'GOPRO HERO 7 BLACK',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '125000',
            'image' => 'media/products/gopro_hero_7_black.jpg',
            'product_detail' => 'Memory 16GB | 2 Battery | Charger | Underwater Housing | Frame Housing | Monopod | Case Bag',
            'kode_barang' => 'BRG009',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'Mirrorless Fujifilm X-A2',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '100000',
            'image' => 'media/products/mirrorless_fujifilm_x-a2.jpg',
            'product_detail' => 'Memory 16GB | 1 Battery | Kit Lens 16-50m | Charger | Mirorrless Bag',
            'kode_barang' => 'BRG010',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'Mirrorless Fujifilm X-A10',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '100000',
            'image' => 'media/products/mirrorless_fujifilm_x-a10.jpg',
            'product_detail' => 'Memory 16GB | 1 Battery | Kit Lens 16-50m | Charger | Mirorrless Bag',
            'kode_barang' => 'BRG011',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'Mirrorless Fujifilm X-A3',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '125000',
            'image' => 'media/products/mirrorless_fujifilm_x-a3.jpg',
            'product_detail' => 'Memory 16GB | 1 Battery | Kit Lens 16-50m | Charger | Mirorrless Bag',
            'kode_barang' => 'BRG012',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'Mirrorless Fujifilm X-T10',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '150000',
            'image' => 'media/products/mirrorless_fujifilm_x-T10.jpg',
            'product_detail' => 'Memory 16GB | 1 Battery | Kit Lens 16-50m | Charger | Mirorrless Bag',
            'kode_barang' => 'BRG013',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'Mirrorless Fujifilm X-T20',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '175000',
            'image' => 'media/products/mirrorless_fujifilm_x-T20.jpg',
            'product_detail' => 'Memory 16GB | 1 Battery | Charger | Mirorrless Bag',
            'kode_barang' => 'BRG014',
        ]);

        DB::table('products')->insert([
            'category_Id' => '1',
            'product_name' => 'FUJIFILM X-T2',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '200000',
            'image' => 'media/products/fujifilm_X-T2.jpg',
            'product_detail' => 'Memory 16GB | 1 Battery | Charger | Mirorrless Bag',
            'kode_barang' => 'BRG015',
        ]);



        // Category Lensa
        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'Canon EF 50mm f.1.2L USM L',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '175000',
            'image' => 'media/products/CANON_EF_50mm_f1_2L_USM_L.jpg',
            'product_detail' => 'Lens Cap ( 2x ) | Hood ( Optional )',
            'kode_barang' => 'BRG016',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'CANON LENS EF 50mm 1.4',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '60000',
            'image' => 'media/products/CANON_LENS_EF_50mm_1_4.jpg',
            'product_detail' => 'Lens Cap | Lens Pouch',
            'kode_barang' => 'BRG017',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'CANON ZOOM LENS 16-35mm 2.8 II USM L',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '175000',
            'image' => 'media/products/CANON_ZOOM_LENS_16-35mm_2_8_II_USM_L.jpg',
            'product_detail' => 'Lens Cap | Lens Pouch',
            'kode_barang' => 'BRG018',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'CANON ZOOM LENS 17-40mm F4 L',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '120000',
            'image' => 'media/products/CANON_ZOOM_LENS_17-40mm_F4_L.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG019',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'Canon EF 24-70mm f.2.8 II USM L',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '170000',
            'image' => 'media/products/Canon_EF_24-70mm_f2.8_II_USM_L.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG020',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'CANON ZOOM LENS 70-200mm 2.8 L',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '170000',
            'image' => 'media/products/CANON_ZOOM_LENS_70-200mm_2.8_L.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG021',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'CANON MACRO LENS 100mm 2.8 L',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '125000',
            'image' => 'media/products/CANON_MACRO_LENS_100mm_2.8_L.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG022',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'SIGMA DC 18-200MM f3.5-6.3 II HSM',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '60000',
            'image' => 'media/products/SIGMA_DC_18-200MM_f3.5-6.3_II_HSM.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG023',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'SIGMA LENS 35mm ART 1.4',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '150000',
            'image' => 'media/products/SIGMA_LENS_35mm_ART_1.4.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG024',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'SIGMA LENS 50mm ART 1.4',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '150000',
            'image' => 'media/products/SIGMA_LENS_50mm_ART_1.4.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG025',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'SIGMA LENS 85mm ART 1.4',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '175000',
            'image' => 'media/products/SIGMA_LENS_85mm_ART_1.4.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG026',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'Tamron 28-75mm F 2.8',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '70000',
            'image' => 'media/products/Tamron_28-75mm_F_2.8.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG027',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'Fujifilm XF 10-24mm F4 R OIS Fujinon',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '100000',
            'image' => 'media/products/Fujifilm_XF_10-24mm_F4_R_OIS_Fujinon.jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG028',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'Fujinon 16-50mm LENSA KIT',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '30000',
            'image' => 'media/products/Fujinon_16-50mm_LENSA_KIT.jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG029',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'Fujinon 18-55mm LENSA KIT',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '50000',
            'image' => 'media/products/Fujinon_18-55mm_LENSA_KIT.jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG030',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'Fujinon 23mm F1.4 FIX LENS',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '110000',
            'image' => 'media/products/Fujinon_23mm_F1.4_FIX_LENS.jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG031',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'Fujinon XF 35mm F2 R WR',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '60000',
            'image' => 'media/products/Fujinon_23mm_F1.4_FIX_LENS.jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG032',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'Fujinon 35mm f1.4 FIX LENS',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '100000',
            'image' => 'media/products/Fujinon_35mm_f1.4_FIX_LENS.jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG033',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'Fujinon 56mm f1.2 FIX LENS',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '110000',
            'image' => 'media/products/Fujinon_56mm_f1.2_FIX_LENS.jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG034',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'Sigma 35mm f.1.4 DG HSM Art Lens ( For Sony )',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '150000',
            'image' => 'media/products/SIGMA_LENS_35mm_ART_1.4.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG035',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'Sigma 50mm f.1.4 DG HSM Art Lens ( For Sony )',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '150000',
            'image' => 'media/products/SIGMA_LENS_50mm_ART_1.4.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG036',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'SONY LENS ZEISS FE 24-70mm f.4 oss',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '170000',
            'image' => 'media/products/SONY_LENS_ZEISS_FE_24-70mm_f4_oss.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG037',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'SONY LENS FE 28-70 mm F3.5-5.6 OSS',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '70000',
            'image' => 'media/products/SONY_LENS_FE_28-70_mm_F3.5-5.6_OSS.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG038',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'SONY LENS FE 50MM F1.8',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '60000',
            'image' => 'media/products/SONY_LENS_FE_50MM_F1.8.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG039',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'SONY LENS FE 85mm F1.8',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '100000',
            'image' => 'media/products/SONY_LENS_FE_85mm_F1.8.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG040',
        ]);

        DB::table('products')->insert([
            'category_Id' => '4',
            'product_name' => 'SONY LENS 70-200mm F4 G',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '170000',
            'image' => 'media/products/SONY_LENS_70-200mm_F4_G.jpg',
            'product_detail' => 'Lens Cap, Lens Pouch',
            'kode_barang' => 'BRG041',
        ]);



        // Category Equipment
        DB::table('products')->insert([
            'category_Id' => '3',
            'product_name' => 'DJI PHANTOM 4',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '750000',
            'image' => 'media/products/DJI_PHANTOM_4.jpg',
            'product_detail' => 'Fullset, 1 Battery',
            'kode_barang' => 'BRG042',
        ]);

        DB::table('products')->insert([
            'category_Id' => '3',
            'product_name' => 'DJI RONIN S',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '260000',
            'image' => 'media/products/DJI_RONIN_S.jpg',
            'product_detail' => 'Fullset, 1 Battery',
            'kode_barang' => 'BRG043',
        ]);

        DB::table('products')->insert([
            'category_Id' => '3',
            'product_name' => 'ZHIYUN CRANE 2 ( STABILIZER CAMERA )',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '225000',
            'image' => 'media/products/ZHIYUN_CRANE_2_(STABILIZER_CAMERA).jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG044',
        ]);

        DB::table('products')->insert([
            'category_Id' => '3',
            'product_name' => 'JIEYANG MONOPOD',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '25000',
            'image' => 'media/products/ZHIYUN_CRANE_2_(STABILIZER_CAMERA).jpg',
            'product_detail' => 'Fullset, Bag',
            'kode_barang' => 'BRG045',
        ]);

        DB::table('products')->insert([
            'category_Id' => '3',
            'product_name' => 'SIGMA MC-11 Mount Converter EF - E-mount',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '70000',
            'image' => 'media/products/SIGMA_MC-11_Mount_Converter_EF-E-mount.jpg',
            'product_detail' => 'Pouch',
            'kode_barang' => 'BRG046',
        ]);

        DB::table('products')->insert([
            'category_Id' => '3',
            'product_name' => 'PROCORE ADAPTER Canon EF - EF S Mount to Sony E-Mount',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '50000',
            'image' => 'media/products/PROCORE_ADAPTER_Canon_EF-EF_S_Mount_to_Sony_E-Mount.jpg',
            'product_detail' => 'Pouch',
            'kode_barang' => 'BRG047',
        ]);


        // Category Lighting
        DB::table('products')->insert([
            'category_Id' => '5',
            'product_name' => 'Godox AD600BM',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '270000',
            'image' => 'media/products/Godox_AD600BM.jpg',
            'product_detail' => 'Lightstand 1 Set | Charger Cable 1 Set',
            'kode_barang' => 'BRG048',
        ]);

        DB::table('products')->insert([
            'category_Id' => '5',
            'product_name' => 'TRONIC TR500',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '150000',
            'image' => 'media/products/TRONIC_TR500.jpg',
            'product_detail' => '1 Set Lighting. 1 Set Lighstand + Umbrella, 1 Set Trigger, Bag',
            'kode_barang' => 'BRG049',
        ]);

        DB::table('products')->insert([
            'category_Id' => '5',
            'product_name' => 'GODOX LEDP120c',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '60000',
            'image' => 'media/products/GODOX_LEDP120c.jpg',
            'product_detail' => '1 Battery, Camera Mount, Charger Fullset, Bag',
            'kode_barang' => 'BRG050',
        ]);

        DB::table('products')->insert([
            'category_Id' => '5',
            'product_name' => 'GODOX V 860 II C',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '75000',
            'image' => 'media/products/GODOX_V_860_II_C.jpg',
            'product_detail' => '1 Battery, Charger, Pouch',
            'kode_barang' => 'BRG051',
        ]);

        DB::table('products')->insert([
            'category_Id' => '5',
            'product_name' => 'Canon Speedlite 430 EX',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '75000',
            'image' => 'media/products/GODOX_LEDP120c.jpg',
            'product_detail' => '4 Battery Eneloop Battery, Pouch',
            'kode_barang' => 'BRG052',
        ]);

        // Categoru Audio
        DB::table('products')->insert([
            'category_Id' => '2',
            'product_name' => 'ZOOM H4n PRO',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '100000',
            'image' => 'media/products/ZOOM_H4n_PRO.jpg',
            'product_detail' => 'Memory Card 8GB, Windscreen, Audio Cable 3.5',
            'kode_barang' => 'BRG053',
        ]);

        DB::table('products')->insert([
            'category_Id' => '2',
            'product_name' => 'RODE VIDEOMIC PRO',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '80000',
            'image' => 'media/products/RODE_VIDEOMIC_PRO.jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG054',
        ]);

        DB::table('products')->insert([
            'category_Id' => '2',
            'product_name' => 'BOYA BY-WM8',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '120000',
            'image' => 'media/products/BOYA_BY-WM8.jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG055',
        ]);

        // Category Other
        DB::table('products')->insert([
            'category_Id' => '6',
            'product_name' => 'SDHC Memory Card Extreme Pro',
            'jenis' => '16 GB',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '20000',
            'image' => 'media/products/sdhc_memory.jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG056',
        ]);
        DB::table('products')->insert([
            'category_Id' => '6',
            'product_name' => 'SDHC Memory Card Extreme Pro',
            'jenis' => '32 GB',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '25000',
            'image' => 'media/products/sdhc_memory.jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG057',
        ]);

        DB::table('products')->insert([
            'category_Id' => '6',
            'product_name' => 'SDHC Memory Card Extreme Pro',
            'jenis' => '64 GB',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '30000',
            'image' => 'media/products/sdhc_memory.jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG058',
        ]);

        DB::table('products')->insert([
            'category_Id' => '6',
            'product_name' => 'SDHC Memory Card Extreme Pro',
            'jenis' => '128 GB',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '35000',
            'image' => 'media/products/sdhc_memory.jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG059',
        ]);

        DB::table('products')->insert([
            'category_Id' => '6',
            'product_name' => 'Compact Flash Memory  Extreme',
            'jenis' => '8 GB',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '25000',
            'image' => 'media/products/Compact_Flash_(CF_Memory).jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG060',
        ]);

        DB::table('products')->insert([
            'category_Id' => '6',
            'product_name' => 'Compact Flash Memory  Extreme',
            'jenis' => '32 GB',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '40000',
            'image' => 'media/products/Compact_Flash_(CF_Memory).jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG061',
        ]);

        DB::table('products')->insert([
            'category_Id' => '6',
            'product_name' => 'Dome Telesin For Gopro',
            'jenis' => '32 GB',
            'quality' => 'Baru',
            'product_quantity' => '10',
            'price' => '50000',
            'image' => 'media/products/Dome_Telesin_For_Gopro.jpg',
            'product_detail' => '',
            'kode_barang' => 'BRG062',
        ]);
    }
}
