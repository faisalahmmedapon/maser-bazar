<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = array(
            [
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 1',
                'slug' =>'supplier-1',
                'email' => 'customer1@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shibjait,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],[
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 2',
                'slug' =>'supplier-2',
                'email' => 'customer2@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shibjait,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],[
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 3',
                'slug' =>'supplier-3',
                'email' => 'customer3@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shibjait,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],[
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 4',
                'slug' =>'supplier-4',
                'email' => 'customer4@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shibjait,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],[
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 5',
                'slug' =>'supplier-5',
                'email' => 'customer5@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shibjait,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],[
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 6',
                'slug' =>'supplier-6',
                'email' => 'customer6@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shibjait,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],[
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 7',
                'slug' =>'supplier-7',
                'email' => 'customer7@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shibjait,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],[
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 8',
                'slug' =>'supplier-8',
                'email' => 'customer8@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shibjait,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],[
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 9',
                'slug' =>'supplier-9',
                'email' => 'customer9@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shibjait,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],[
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 10',
                'slug' =>'supplier-10',
                'email' => 'customer10@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shibjait,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],[
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 11',
                'slug' =>'supplier-11',
                'email' => 'customer11@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shibjait,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],[
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 12',
                'slug' =>'supplier-12',
                'email' => 'customer12@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shibjait,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],[
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 13',
                'slug' =>'supplier-13',
                'email' => 'customer13@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shibjait,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],[
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 15',
                'slug' =>'supplier-15',
                'email' => 'customer15@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shibjait,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],[
                'invoice_id' => random_int(10000000,99999999),
                'name' => 'Supplier 16',
                'slug' =>'supplier-16',
                'email' => 'customer16@gmail.com',
                'phone' => '+8801307788699',
                'address' => 'Shiitake,Bagmara,Rajshahi',
                'photo' => 'https://png.pngtree.com/png-vector/20200614/ourlarge/pngtree-businessman-user-avatar-character-vector-illustration-png-image_2242909.jpg',
                'details' => 'This is Faisal Ahmmed Apon',
            ],

        );

        foreach ($suppliers as $supplier){
            Supplier::updateOrCreate($supplier);
        }
    }
}
