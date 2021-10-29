<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $setting = \App\Models\Setting::create([
        'name' => ' الفاروق لادارة شئون العاملين', 
        'manger' => ' أنس البحراوي', 
        'phone' => '0123456789', 
        'cell' => '0123456789',
        'email' => 'sch.g.lp.ge.27728@makkahedu.gov.sa', 
        'logo' => 'logo.jpg', 
        'message' => 'نسعى لبناء نشء مبدع متمسكا بدينه وقيمه ، قادرا على مواكبةالتطوير بقيادة معلمات محفزات على التعلم والابتكار ، في ظل مجتمع متعاون ليرتقي بدينه ووطنه',
        'vision' => 'التميز في إعداد نشء واع فكريا ،مبدع فكريا ، مبهر أخلاقيا ، نافعا لدينه ووطنه',
        'goals' => '• تبني طموح مشترك يتقاسمه الجميع.
        • توضيح مسار واتجاه المدرسة المستقبلي.
        • ترشيد استخدام الموارد وتوظيف الطاقات.
        • زيادة الشعور بالانتماء للمدرسة.', 
      ]);
    }
}
