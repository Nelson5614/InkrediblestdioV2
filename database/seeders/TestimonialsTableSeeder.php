<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;
class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            'name'=>'Relebohile Molapo',
            'description'=>'Wow! Just from the reception the service is marvelous. The kind of respect they show to the customer regardless of age is so soothing, you begin to see the real meaning of "Customer ke Morena'
        ]);
        Testimonial::create([
            'name'=>'Palesa Rakotsoane',
            'description'=>'I enjoyed the warm welcome I received starting from the receptionist and other staff members including the artists.I was kept busy by some entertaining music throughout my tattoo making session of which didnt realise that time flew on and I was mostly pleased by my tattoo result.'
        ]);
        Testimonial::create([
            'name'=>'reitumetse monnapula',
            'description'=>'Very warming and professional will be coming back to get my tattoos soon '
        ]);
        Testimonial::create([
            'name'=>'Mpolokeng Thamae',
            'description'=>'Appointment time was well adhered to, from the minute I walked into the reception area to the end of my tattoo service was impeccable. I was offered some snacks and light foods and coffee, another one of my favorite things was the playlist throughout my tattoo session. I highly recommend inKredible studio Lesotho.'
        ]);
      
    }
}
