<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id'        => 1,
                'maps'      => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.759214087315!2d106.77868347878068!3d-6.16299327790044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f645ebf421d1%3A0x9b02ddc354e63d65!2sRajabarcode%20Workshop!5e0!3m2!1sid!2sid!4v1701331717912!5m2!1sid!2sid',
                'address'   => 'San Francisco, CA 4th Floor8 Lower San Francisco street, M1 50F',
                'website'   => 'www.yourcompany.com',
                'email'     => 'yourcompany@email.com',
                'phone'     => '621231251253353',
                'instagram' => 'yourcompany',
                'facebook'  => 'yourcompany',
                'twitter'   => 'yourcompany',
                'youtube'   => 'yourcompany',
                'linkedin'  => 'yourcompany',
                'whatsapp'  => '621231251253353'
            ]
        ];

        foreach ($data as $key => $value) {
            Contact::create($value);
        }
    }
}
