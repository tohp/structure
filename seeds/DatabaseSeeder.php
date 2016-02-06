<?php

use Illuminate\Database\Seeder;
use App\Http\Model\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->call('CreateAttachTypesTableSeeder');
        $this->call('CreateBusinessesTableSeeder');
        $this->call('CreateBusinessServicesTableSeeder');
        $this->call('CreateBusinessStaffsTableSeeder');
        $this->call('CreateBusinessesCategoriesTableSeeder');
        $this->call('CreateHolidaysTableSeeder');
        $this->call('CreateStaffsTableSeeder');
        $this->call('CreateServicesTableSeeder');
        $this->call('CreateRoleTableSeeder');
        $this->call('CreateUserTableSeeder');
    }
}

class CreateAttachTypesTableSeeder extends Seeder {
    public function run()
    {
        DB::table('object_types')->delete();
        DB::table('object_types')->insert([
            [
                'id'=>'01',
                'object_type_name'=>'business'
            ],[
                'id'=>'02',
                'object_type_name'=>'note'
            ],[
                'id'=>'03',
                'object_type_name'=>'services'
            ],[
                'id'=>'04',
                'object_type_name'=>'staffs'
            ],[
                'id'=>'05',
                'object_type_name'=>'transactions'
            ],[
                'id'=>'06',
                'object_type_name'=>'users'
            ]
        ]);
    }
}
class CreateBusinessesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('businesses')->delete();
        
        DB::table('businesses')->insert([
            [
                'id'=>'',
                'user_id'=>'1',
                'company'=>'CoCo Spa',
                'logo'=>'http:/asdfewrfsdf.com',
                'email'=>'team@sawasdee-idea.com',
                'phone'=>'028764845',
                'phone_ext'=>'123',
                'website'=>'http://sawasdee-idea.com',
                'currency'=>'THB',
                'address'=>'39/32 ประชาอุทิศ 91',
                'district'=>'ทุ่งครุ',
                'province'=>'001',
                'postcode'=>'10140',
                'description'=>'ประกอบธุรกิจรับทำเว็บไซต์',
                'facebook'=>'http://facebook.com/sawasdeeidea',
                'instagram'=>'http://instagram.com/sawasdeeidea',
                'line'=>'@sawasdeeidea',
                'isShow_map'=>'1',
                'google_map_latitude'=>'14.46523',
                'google_map_longitude'=>'100.13137',
                'google_map_longitude'=>'100.13137',
                'mon_business_work'=>'1',
                'tue_business_work'=>'1',
                'wed_business_work'=>'1',
                'thu_business_work'=>'1',
                'fri_business_work'=>'1',
                'sat_business_work'=>'0',
                'sun_business_work'=>'0',
                'mon_business_hours_from'=>'09:00',
                'tue_business_hours_from'=>'09:00',
                'wed_business_hours_from'=>'09:00',
                'thu_business_hours_from'=>'09:00',
                'fri_business_hours_from'=>'09:00',
                'sat_business_hours_from'=>'',
                'sun_business_hours_from'=>'',
                'mon_business_hours_to'=>'18:00',
                'tue_business_hours_to'=>'18:00',
                'wed_business_hours_to'=>'18:00',
                'thu_business_hours_to'=>'18:00',
                'fri_business_hours_to'=>'18:00',
                'sat_business_hours_to'=>'',
                'sun_business_hours_to'=>'',
                'locale'=>'UTC+7',
                'is_deleted'=>'0',
                'created_by'=>'001',
                'updated_by'=>'001'
            ],
            [
                'id'=>'',
                'user_id'=>'1',
                'company'=>'Sawasdee Idea',
                'logo'=>'http:/asdfewrfsdf.com',
                'email'=>'team@sawasdee-idea.com',
                'phone'=>'028764845',
                'phone_ext'=>'123',
                'website'=>'http://sawasdee-idea.com',
                'currency'=>'THB',
                'address'=>'39/32 ประชาอุทิศ 91',
                'district'=>'ทุ่งครุ',
                'province'=>'001',
                'postcode'=>'10140',
                'description'=>'ประกอบธุรกิจรับทำเว็บไซต์',
                'facebook'=>'http://facebook.com/sawasdeeidea',
                'instagram'=>'http://instagram.com/sawasdeeidea',
                'line'=>'@sawasdeeidea',
                'isShow_map'=>'1',
                'google_map_latitude'=>'14.46523',
                'google_map_longitude'=>'100.13137',
                'google_map_longitude'=>'100.13137',
                'mon_business_work'=>'1',
                'tue_business_work'=>'1',
                'wed_business_work'=>'1',
                'thu_business_work'=>'1',
                'fri_business_work'=>'1',
                'sat_business_work'=>'0',
                'sun_business_work'=>'0',
                'mon_business_hours_from'=>'09:00',
                'tue_business_hours_from'=>'09:00',
                'wed_business_hours_from'=>'09:00',
                'thu_business_hours_from'=>'09:00',
                'fri_business_hours_from'=>'09:00',
                'sat_business_hours_from'=>'',
                'sun_business_hours_from'=>'',
                'mon_business_hours_to'=>'18:00',
                'tue_business_hours_to'=>'18:00',
                'wed_business_hours_to'=>'18:00',
                'thu_business_hours_to'=>'18:00',
                'fri_business_hours_to'=>'18:00',
                'sat_business_hours_to'=>'',
                'sun_business_hours_to'=>'',
                'locale'=>'UTC+7',
                'is_deleted'=>'0',
                'created_by'=>'001',
                'updated_by'=>'001'
            ]
        ]);
    }
}
class CreateBusinessServicesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('businesses_services')->delete();
        
        DB::table('businesses_services')->insert([
            [
                'business_id'=>'1',
                'service_id'=>'1',
                'is_deleted'=>'0'
                
            ],[
                'business_id'=>'1',
                'service_id'=>'2',
                'is_deleted'=>'0'
                
            ],[
                'business_id'=>'2',
                'service_id'=>'1',
                'is_deleted'=>'0'
                
            ]
        ]);
    }
}
class CreateBusinessStaffsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('businesses_staffs')->delete();
        
        DB::table('businesses_staffs')->insert([
            [
                'business_id'=>'1',
                'staff_id'=>'1',
                'is_deleted'=>'0'
                
            ],[
                'business_id'=>'1',
                'staff_id'=>'2',
                'is_deleted'=>'0'
                
            ],[
                'business_id'=>'2',
                'staff_id'=>'1',
                'is_deleted'=>'0'
            ]
        ]);
    }
}
class CreateBusinessesCategoriesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('businesses_categories')->delete();
        $cat_lists=array('สัตว์เลี้ยง','คอมพิวเตอร์','ความสวยความงาม','งานอะดิเรก','ช่างไม้','ช่างสัก');
        foreach($cat_lists as $i=>$cat_list){
            $cat_arr[$i]=array(
                'business_category_id'=>"$i+1",
                'name'=>$cat_list,
                'priority'=> ($i+1)*10,
                'is_deleted'=>'0',
                'created_by'=>'001',
                'updated_by'=>'001'
            );
            
        }
        DB::table('businesses_categories')->insert($cat_arr);
    }
}
class CreateHolidaysTableSeeder extends Seeder {
    public function run()
    {
        DB::table('holidays')->delete();
        
        DB::table('holidays')->insert([
            [
                'id'=>'',
                'object_id'=>'1',
                'object_type'=>'01',
                'description'=>'วันหยุดปีใหม่',
                'from'=>'2016-12-31 08:00:00',
                'to'=>'2016-12-31 18:00:00',
                'is_deleted'=>'0',
                'created_by'=>'001',
                'updated_by'=>'001'

            ],[
                'id'=>'',
                'object_id'=>'1',
                'object_type'=>'04',
                'description'=>'เมียคลอด',
                'from'=>'2016-12-15 08:00:00',
                'to'=>'2016-12-18 18:00:00',
                'is_deleted'=>'0',
                'created_by'=>'001',
                'updated_by'=>'001'
            ],[
                'id'=>'',
                'object_id'=>'1',
                'object_type'=>'03',
                'description'=>'สินค้าหมด',
                'from'=>'2016-12-15 08:00:00',
                'to'=>'2016-12-18 18:00:00',
                'is_deleted'=>'0',
                'created_by'=>'001',
                'updated_by'=>'001'
            ]
        ]);
    }
}
class CreateStaffsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('staffs')->delete();
        
        DB::table('staffs')->insert([
            [
                'id'=>'1',
                'name'=>'Ekkaphot Jaroenpanich',
                'mobile'=>'0998794721',
                'email'=>'ekkaphot@hotmail.com',
                'position'=>'staff',
                'created_by'=>'001',
                'updated_by'=>'001',

            ],[
                'id'=>'2',
                'name'=>'Pattiya Chaichoke',
                'mobile'=>'078954315',
                'email'=>'issjed@hotmail.com',
                'position'=>'staff',
                'created_by'=>'001',
                'updated_by'=>'001',
            ]
        ]);
    }
}
class CreateServicesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('services')->delete();
        
        DB::table('services')->insert([
            [
                'id'=>'1',
                'name'=>'Spa foot cartoon fish',
                'description'=>'ekkaphot@hotmail.com',
                'price'=>'7500.50',
                'duration'=>'30',
                'is_deleted'=>'0'

            ],[
                'id'=>'2',
                'name'=>'Pretty Spa',
                'description'=>'นวดตัวด้วยพริตตี้สาวสวย',
                 'price'=>'1500.00',
                'duration'=>'60',
                'is_deleted'=>'0'
            ]
        ]);
    }
}
class CreateRoleTableSeeder extends Seeder{

    public function run()
    {
        DB::table('roles')->delete();
        DB::table('roles')->insert([
            [
                'id'            => 1,
                'name'          => 'Root',
                'description'   => 'Use this account with extreme caution. When using this account it is possible to cause irreversible damage to the system.',
                'is_deleted'    => '0'
            ],
            [
                'id'            => 2,
                'name'          => 'Administrator',
                'description'   => 'Full access to create, edit, and update companies, and orders.',
                'is_deleted'    => '0'
            ],
            [
                'id'            => 3,
                'name'          => 'Manager',
                'description'   => 'Ability to create new companies and orders, or edit and update any existing ones.',
                'is_deleted'    => '0'
            ],
            [
                'id'            => 4,
                'name'          => 'Company Manager',
                'description'   => 'Able to manage the company that the user belongs to, including adding sites, creating new users and assigning licences.',
                'is_deleted'    => '0'
            ],
            [
                'id'            => 5,
                'name'          => 'User',
                'description'   => 'A standard user that can have a licence assigned to them. No administrative features.',
                'is_deleted'    => '0'
            ]
        ]);
    }
    
}
class CreateUserTableSeeder extends Seeder{

    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
                'id'    =>'',
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'email' => 'admin@gmail.com',
                'role_id'=>'2',
                'created_by'=>'001',
                'updated_by'=>'001',
            ]);
    }
}