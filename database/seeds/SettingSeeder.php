<?php


use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #علامه / هي تخرجك من المجلد الي انت بيه حتى نكدر بعدها نوصل الى app ومن بعدها الى model سثففهىل
        App\Setting::create([
            'blog_name'=>'ammar Hadee',
            'blog_phone'=>'011111111111',
            'blog_emil'=>'alaziiammar@gmail.com',
            'address'=>'diyala'
        ]);//end create Setting
    }
}
