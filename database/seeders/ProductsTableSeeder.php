<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'1pc- (GOLD) Shell Covered Butterfly Belly Ring',
            'description'=>'316L Surgical Steel

                            Thickness: 14GA (1.6mm)

                            Length: 3/8″(10mm)

                            AUTOCLAVE NOT RECOMMENDED',
            'price'=>'220',
            'size'=>'16g 12mm top',
            'slug'=>'butterfly',
            'color'=>'black'
        ]);
        Product::create([
            'name'=>'1pc- Prong Set Round CZ Captive Ring',
            'description'=>'316L Surgical Steel

                            Size: 3/8″ (10mm)

                            Ball/Gem: 3mm',
            'price'=>'70',
            'size'=>'16g 12mm top',
            'slug'=>'prongset',
            'color'=>'black'
        ]);
        Product::create([
            'name'=>'5pc – 16G Plain Black braided hoop ring',
            'description'=>'Material: Surgical steel/nickel free

                            Thickness:  16G 1.2mm

                            Size: various

                            Sold in a pack of 5',
            'price'=>'100',
            'size'=>'16g 12mm top',
            'slug'=>'prongset',
            'color'=>'black'
        ]);
    }
}
