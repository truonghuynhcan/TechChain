<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "name" => "Samsung Galaxy S23 FE 5G 128GB",
                "price" => 14890000,
                "sale_price" => 13390000,
                "image" => "638471599704474139_samsung-galaxy-s23--fe-den-dd-AI.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "OPPO Reno11 F 5G 8GB-256GB",
                "price" => 8990000,
                "sale_price" => 8490000,
                "image" => "638493832157161657_oppo-reno11-f-green-1.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Xiaomi Poco M6 Pro 8GB-256GB",
                "price" => 6490000,
                "sale_price" => 5990000,
                "image" => "638417729562660990_xiaomi-poco-m6-pro-dd-docquyen-bh.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy S23 5G 256GB",
                "price" => 24990000,
                "sale_price" => 15490000,
                "image" => "638518175414796345_samsung-galaxy-s23-5g-thumb-doc-quyen.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Honor X7b 8GB-256GB",
                "price" => 5290000,
                "sale_price" => 4990000,
                "image" => "638454261816142342_honor-x7b-xanh-6.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "OPPO A18 4GB-128GB",
                "price" => 3990000,
                "sale_price" => 3690000,
                "image" => "638509283036082649_OPPO-A18-thumb.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "iPhone 15 Pro Max 256GB",
                "price" => 34990000,
                "sale_price" => 29290000,
                "image" => "638342502751589917_ip-15-pro-max-dd-bh-2-nam.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy S24 Ultra 5G 256GB",
                "price" => 33990000,
                "sale_price" => 31990000,
                "image" => "638477639726536939_samsung-galaxy-s24-ultra-dd-AI.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Honor X9B 5G 12GB-256GB",
                "price" => 8990000,
                "sale_price" => 8390000,
                "image" => "638405567889290705_honor-x9b-dd-dq-1.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy A35 5G 128GB",
                "price" => 8290000,
                "sale_price" => 7990000,
                "image" => "638496340616522014_samsung-galaxy-a35-dd-doimoi.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "OPPO A58 6GB-128GB",
                "price" => 4990000,
                "sale_price" => 4690000,
                "image" => "638265802441511578_oppo-a58-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Xiaomi Redmi A3 4GB-128GB",
                "price" => 2990000,
                "image" => "638475678237775959_xiaomi-redmi-a3-dd-bh-thucu.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy Z Flip4 5G 128GB",
                "price" => 23990000,
                "sale_price" => 11990000,
                "image" => "638131739579610504_samsung-galaxy-z-flip4-tim-dd-tragop.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Tecno Spark Go 2024 4GB-64GB",
                "price" => 2190000,
                "sale_price" => 1990000,
                "image" => "638518773813324397_tecno-spark-go-2024-thumb-thu-cu-2g-100k.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy A15 128GB",
                "price" => 4490000,
                "image" => "638397853078631034_samsung-galaxy-a15-xanh-dd-doimoi.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "OPPO A78 8GB-256GB",
                "price" => 6990000,
                "sale_price" => 6490000,
                "image" => "638241536485031136_oppo-a78-den-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Xiaomi Redmi Note 13 6GB-128GB",
                "price" => 4890000,
                "sale_price" => 4690000,
                "image" => "638421256103594350_xiaomi-redmi-note-13-dd-bh.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy A05s 128GB",
                "price" => 3990000,
                "sale_price" => 3590000,
                "image" => "638352249930121103_samsung-galaxy-a05s-dd-doimay.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Vivo Y03 4GB 64GB",
                "price" => 2990000,
                "image" => "638465432001765517_vivo-y03-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy A05 128GB",
                "price" => 3090000,
                "image" => "638352248927372216_samsung-galaxy-a05-dd-doimay.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Honor X5 Plus 4GB-64GB",
                "price" => 2790000,
                "sale_price" => 2490000,
                "image" => "638376267641979247_honor-x5-plus-dd-doimoi.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy A23 5G",
                "price" => 5990000,
                "sale_price" => 4190000,
                "image" => "638451444037915753_samsung-galaxy-a23-5g-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "OPPO A17k 3GB-64GB",
                "price" => 3290000,
                "sale_price" => 2790000,
                "image" => "638071502453762468_oppo-a17k-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Xiaomi Redmi A2 2GB-32GB",
                "price" => 2190000,
                "sale_price" => 1690000,
                "image" => "638475676879245067_xiaomi-redmi-a2-den-dd-bh-thucu.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Nokia 105 DS Pro 4G",
                "price" => 680000,
                "image" => "638276308841835967_nokia-105-ds-pro-4g-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Masstel Izi 15 4G",
                "price" => 390000,
                "image" => "638221670357613128_masstel-izi-15-dd-bh.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy Z Fold5 5G 256GB",
                "price" => 40990000,
                "sale_price" => 34990000,
                "image" => "638472349027667377_samsung-galaxy-zfold-5-dd-ai.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy Z Flip5 5G 256GB",
                "price" => 25990000,
                "sale_price" => 19990000,
                "image" => "638472349027667377_samsung-galaxy-zflip-5-dd-ai.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "iPhone 12 64GB",
                "price" => 17990000,
                "sale_price" => 11590000,
                "image" => "638440267786171563_iphone-12-dd-bh.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "iPhone 11 64GB",
                "price" => 11990000,
                "sale_price" => 8690000,
                "image" => "638440266267791271_iphone-11-dd-bh.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "OPPO Reno10 5G 128GB",
                "price" => 9990000,
                "sale_price" => 8490000,
                "image" => "638253719457391276_oppo-reno10-5g-xanh-5.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy A34 5G",
                "price" => 8490000,
                "sale_price" => 6490000,
                "image" => "638241722578403987_samsung-galaxy-a34-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "OPPO Reno8 T 4G 256GB",
                "price" => 8490000,
                "sale_price" => 6290000,
                "image" => "638155148198300095_oppo-reno8-t-4g-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Honor 90 Lite 5G 8GB-256GB",
                "price" => 6490000,
                "sale_price" => 5490000,
                "image" => "638372867419434789_honor-90-lite-den-dd-100ngadoimoi.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "OPPO A77s 8GB-128GB",
                "price" => 6290000,
                "sale_price" => 5190000,
                "image" => "638071499364966239_oppo-a77s-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Vivo Y22s 8GB-128GB",
                "price" => 5990000,
                "sale_price" => 3990000,
                "image" => "637983398315589960_vivo-y22s-xanh-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Honor X8A 8GB-128GB",
                "price" => 4990000,
                "sale_price" => 3990000,
                "image" => "638451449167360007_honor-x8a-dd-docquyen.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "realme C55 6GB-128GB",
                "price" => 4990000,
                "sale_price" => 3990000,
                "image" => "638150119693895777_realme-c55-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Realme C51 6GB-256GB",
                "price" => 4490000,
                "sale_price" => 3890000,
                "image" => "638423850797799428_realme-c51-dd-doimoi.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Vivo Y16 4GB-128GB",
                "price" => 4490000,
                "sale_price" => 3190000,
                "image" => "637983383787368693_vivo-y16-vang-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Vivo T1x 4GB-64GB",
                "price" => 4490000,
                "sale_price" => 3190000,
                "image" => "637939995401683559_vivo-t1x-xanh-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy A04s",
                "price" => 3990000,
                "sale_price" => 2990000,
                "image" => "638204394272841272_samsung-galaxy-a04s-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Honor X7A 6GB-128GB",
                "price" => 3990000,
                "sale_price" => 2990000,
                "image" => "638384879237174933_honor-x7a--dd-doimoi.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "OPPO Find N3 5G 16GB-512GB",
                "price" => 44990000,
                "sale_price" => 41990000,
                "image" => "638372781579679832_oppo-find-n3-5g-vang-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Xiaomi 14 Ultra 16GB-512GB",
                "price" => 32990000,
                "sale_price" => 28990000,
                "image" => "638512907059406867_xiaomi-14-ultra-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "iPhone 14 Pro Max 256GB",
                "price" => 32990000,
                "sale_price" => 27990000,
                "image" => "638007285202545738_iphone-14-pro-max-dd-bh.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy S23 Ultra 5G 256GB",
                "price" => 31990000,
                "sale_price" => 24990000,
                "image" => "638471599704942918_samsung-galaxy-s23-ultra-xanh-dd-AI.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy S24 Plus 5G 256GB",
                "price" => 26990000,
                "sale_price" => 24990000,
                "image" => "638477639726536939_samsung-galaxy-s24-dd-ai.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "iPhone 15 Pro 128GB",
                "price" => 28990000,
                "sale_price" => 24590000,
                "image" => "638342505369309720_ip-15-pro-dd-bh-2-nam.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "iPhone 15 Plus 128GB",
                "price" => 25990000,
                "sale_price" => 22190000,
                "image" => "638342507329455238_ip-15-plus-dd-bh-2-nam.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy S24 5G 256GB",
                "price" => 22990000,
                "sale_price" => 21990000,
                "image" => "638477647082711479_samsung-galaxy-s24-plus-dd-ai.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Xiaomi 14 12GB-256GB",
                "price" => 22990000,
                "sale_price" => 20990000,
                "image" => "638470498770132071_xiaomi-14-dd-bh.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "iPhone 14 Plus 128GB",
                "price" => 24990000,
                "sale_price" => 19390000,
                "image" => "638440340613418500_iphone-14-plus-dd-bh.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy S23 Plus 5G 512GB",
                "price" => 29990000,
                "sale_price" => 18990000,
                "image" => "638471599704942918_samsung-galaxy-s23-plus-dd-AI.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "iPhone 15 128GB",
                "price" => 22990000,
                "sale_price" => 18990000,
                "image" => "638342508308826366_ip-15-dd-bh-2-nam.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "iPhone 14 128GB",
                "price" => 21990000,
                "sale_price" => 16490000,
                "image" => "638440338632079848_iphone-14-dd-bh.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "iPhone 13 128GB",
                "price" => 18990000,
                "sale_price" => 13690000,
                "image" => "638090353746989186_iphone-13-dd-bh.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy S22 5G 128GB",
                "price" => 21990000,
                "sale_price" => 10990000,
                "image" => "638158962810512367_ss-galaxy-s22-dd-icon.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Honor 90 5G 12GB-512GB",
                "price" => 11990000,
                "sale_price" => 10490000,
                "image" => "638374810165060159_honor-90-512gb-bac-dd-docquyen-doimoi.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Xiaomi Redmi Note 13 Pro+ 5G 8GB-256GB",
                "price" => 10990000,
                "sale_price" => 9990000,
                "image" => "638421257525766915_xiaomi-redmi-note-13-pro-plus-dd-bh.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy A55 5G 128GB",
                "price" => 9990000,
                "sale_price" => 9690000,
                "image" => "638496341977733304_samsung-galaxy-a55-dd-doimoi.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Vivo V25 5G 8GB-128GB",
                "price" => 10490000,
                "sale_price" => 6690000,
                "image" => "637987655741141806_vivo-v25-den-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy A25 5G 128GB",
                "price" => 6590000,
                "image" => "638381428873270642_samsung-galaxy-a25-5g-dd-moi.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Xiaomi Redmi Note 13 Pro 8GB-128GB",
                "price" => 7290000,
                "sale_price" => 6290000,
                "image" => "638439585124761983_xiaomi-redmi-note-13-pro-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy M34 5G 128GB",
                "price" => 7990000,
                "sale_price" => 5790000,
                "image" => "638309118225649175_samsung-galaxy-m34-5g-dd-moi.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Vivo V25e 8GB-128GB",
                "price" => 8490000,
                "sale_price" => 5390000,
                "image" => "637987654083012579_vivo-v25e-vang-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Tecno Spark 20 Pro+ 8GB 256GB",
                "price" => 5490000,
                "sale_price" => 4990000,
                "image" => "638495509557189960_tecno-spark-20-pro-plus-thumb.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Tecno Pova 5 8GB-128GB",
                "price" => 4490000,
                "sale_price" => 3890000,
                "image" => "638495516426062744_tecno-pova-5-thumb.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Xiaomi Redmi Note 12 4GB-128GB",
                "price" => 4990000,
                "sale_price" => 3490000,
                "image" => "638475679703250251_xiaomi-redmi-note-12-dd-bh-thucu.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "OPPO A17 4GB-64GB",
                "price" => 3990000,
                "sale_price" => 3390000,
                "image" => "638071513576393682_oppo-a17-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Xiaomi Redmi 13C 6GB-128GB",
                "price" => 3490000,
                "sale_price" => 3290000,
                "image" => "638350317315831967_realme-13c-dd-bh-18-thang.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Tecno Spark 20 8GB-128GB",
                "price" => 3490000,
                "sale_price" => 3190000,
                "image" => "638495663963308786_tecno-spark-20-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Samsung Galaxy A14 4G",
                "price" => 4490000,
                "sale_price" => 2990000,
                "image" => "638218311992000309_samsung-galaxy-a14-4g-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Honor X6A 4GB-128GB",
                "price" => 3490000,
                "sale_price" => 2990000,
                "image" => "638423853031132097_hornor-x6a-dd-thucu.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "realme C60 4GB-64GB",
                "price" => 2790000,
                "image" => "638477398472108436_realme-c60-dd-bh.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Tecno Spark 20C 4GB-128GB",
                "price" => 2790000,
                "sale_price" => 2590000,
                "image" => "638495555871383963_tecno-spark-20c-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "realme C30s 3GB-64GB",
                "price" => 2690000,
                "sale_price" => 2290000,
                "image" => "638151666817188867_realme-c30s-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Nokia 215 DS 4G",
                "price" => 990000,
                "image" => "637408832230600670_nokia-215-xanh-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Nokia 110 DS Pro 4G",
                "price" => 720000,
                "image" => "638276301133266677_nokia-110-ds-pro-4g-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Masstel Fami 60S 4G",
                "price" => 700000,
                "image" => "638451627464973906_masstel-60s-4g-dd-doimoi.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Nokia 105 DS 4G",
                "price" => 820000,
                "sale_price" => 620000,
                "image" => "637607687653384467_nokia-105-4g-xanh-1.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Masstel izi 30 4G",
                "price" => 600000,
                "image" => "638230518811245981_masstel-izi-30-4g-dd-bh.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Masstel izi T2 4G",
                "price" => 500000,
                "image" => "638373724163678225_masstel-izi-t2-dd-doimoi.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ],
            [
                "name" => "Tecno Camon 30 8GB 256GB",
                "price" => 733820,
                "image" => "638520614162799377_tecno-camon-30-dd.webp",
                "instock" => rand(10, 50),
                "category_id" => 1
            ]
        ];

        foreach ($products as $sp) {

            Product::create(
                [
                    "name" => $sp['name'],
                    "slug" => Str::slug($sp['name']),
                    "price" => $sp['price'],
                    "sale_price" => $sp['sale_price']??null,
                    "image" => $sp['image'],
                    "instock" => $sp['instock'],
                    "category_id" => $sp['category_id']
                ]
            );
        }
    }
}
