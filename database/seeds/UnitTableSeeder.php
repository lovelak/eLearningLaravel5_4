<?php

use Illuminate\Database\Seeder;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $seed = new App\Unit();
        $seed->name = 'หน่วยที่ 1';
        $seed->title = 'แนะนำ DESKTOP AUTHOR';
        $seed->save();

        $seed1 = new App\Unit();
        $seed1->name = 'หน่วยที่ 2';
        $seed1->title = 'เริ่มสร้างหนังสืออิเล็กทรอนิกส์';
        $seed1->save();


        $seed2 = new App\Unit();
        $seed2->name = 'หน่วยที่ 3';
        $seed2->title = 'ข้อความและ MULTIMEDIA';
        $seed2->save();


        $seed3 = new App\Unit();
        $seed3->name = 'หน่วยที่ 4';
        $seed3->title = ' ปุ่ม BUTTONS และการเชื่อมโยง';
        $seed3->save();


        $seed4 = new App\Unit();
        $seed4->name = 'หน่วยที่ 5';
        $seed4->title = 'การสร้างแบบทดสอบ';
        $seed4->save();

        $seed5 = new App\Unit();
        $seed5->name = 'หน่วยที่ 6';
        $seed5->title = 'การบีบอัดไฟล์เพื่อเผยแพร่ผลงาน';
        $seed5->save();

    }
}
