<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Faq::create([
            'pertanyaan' => 'Aplikasi apa ini? 2',
            'jawaban' => '<p>This is the first item&#39;s accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables.</p>

<ul>
    <li>It&#39;s also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.</li>
    <li>It&#39;s also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow</li>
</ul>

<p><em><strong>tes4</strong></em></p>'
        ]);

        Faq::create([
            'pertanyaan' => 'Aplikasi apa ini? 2',
            'jawaban' => '<p>This is the first item&#39;s accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables.</p>

<ul>
    <li>It&#39;s also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.</li>
    <li>It&#39;s also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow</li>
</ul>

<p><em><strong>tes4</strong></em></p>'
        ]);

        Faq::create([
            'pertanyaan' => 'Aplikasi apa ini? 2',
            'jawaban' => '<p>This is the first item&#39;s accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables.</p>

<ul>
    <li>It&#39;s also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.</li>
    <li>It&#39;s also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow</li>
</ul>

<p><em><strong>tes4</strong></em></p>'
        ]);
    }
}
