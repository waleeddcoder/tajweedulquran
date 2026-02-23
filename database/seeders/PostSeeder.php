<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title'            => 'The Importance of Tajweed in Quran Recitation',
                'slug'             => 'importance-of-tajweed-in-quran-recitation',
                'content'          => '<h2>What is Tajweed?</h2>
<p>Tajweed (تجويد) linguistically means "to make well" or "to improve." In the context of Quran recitation, it refers to the set of rules that govern how each letter of the Quran is to be pronounced and articulated.</p>

<p>Tajweed is not merely an art form — it is <strong>an obligation upon every Muslim</strong> who recites the Quran. Allah says in Surah Al-Muzzammil (73:4):</p>

<blockquote><em>"And recite the Qur\'an with measured recitation."</em></blockquote>

<h2>Why is Tajweed So Important?</h2>
<p>The Arabic language is deeply phonetic. A single mispronunciation can change the meaning of a word entirely. Applying the rules of Tajweed ensures:</p>
<ul>
  <li>The word of Allah is preserved in its original form</li>
  <li>The spiritual beauty of recitation is maintained</li>
  <li>No accidental change in meaning occurs</li>
  <li>Your recitation becomes a source of reward and beauty</li>
</ul>

<h2>Key Rules of Tajweed You Should Know</h2>
<p>Here are some foundational rules that every student of the Quran should master:</p>
<ol>
  <li><strong>Makharij al-Huruf</strong> – The correct articulation points of letters</li>
  <li><strong>Sifaat al-Huruf</strong> – The characteristics of each letter</li>
  <li><strong>Noon Sakinah & Tanween</strong> – Rules of Idgham, Ikhfa, Izhar, and Iqlab</li>
  <li><strong>Meem Sakinah</strong> – Rules of Ikhfa Shafawi and Idgham Shafawi</li>
  <li><strong>Al-Madd</strong> – Rules of elongation</li>
</ol>

<h2>How to Learn Tajweed?</h2>
<p>The best way to learn Tajweed is with a qualified, certified teacher who can listen to your recitation, correct your mistakes in real time, and guide you step by step. Online platforms like Tajweed Ul Quran make this accessible from anywhere in the world.</p>

<p>Start your journey today with a free trial class and experience the transformation in your recitation.</p>',
                'featured_image'   => null,
                'seo_title'        => 'The Importance of Tajweed in Quran Recitation | Tajweed Ul Quran',
                'meta_description' => 'Learn why Tajweed is essential for every Muslim and how learning proper Quran recitation rules transforms your connection with the Book of Allah.',
                'is_published'     => true,
            ],
            [
                'title'            => '5 Practical Tips to Memorize the Quran Faster',
                'slug'             => '5-practical-tips-to-memorize-quran-faster',
                'content'          => '<h2>The Sacred Goal of Hifz</h2>
<p>Memorizing the Quran — known as Hifz — is one of the most honoured acts in Islam. The Prophet ﷺ said: <em>"The best of you are those who learn the Quran and teach it."</em> (Bukhari)</p>

<p>But memorization requires a proper system. Here are 5 proven, practical tips that certified Huffaz use to memorize the Quran effectively.</p>

<h2>Tip 1: Listen Before You Memorize</h2>
<p>Before attempting to memorize any verse, listen to it being recited — multiple times — by a qualified reciter. This embeds the correct pronunciation and melody in your mind before your tongue begins the work.</p>

<h2>Tip 2: Set a Realistic Daily Target</h2>
<p>Consistency massively outperforms intensity. Instead of memorizing 2 pages one day and nothing for three days, memorize <strong>5 to 10 lines every single day</strong>. At that pace, you can complete the entire Quran in 2–3 years.</p>

<h2>Tip 3: Revise 3× More Than You Memorize</h2>
<p>New memorization is fragile. For every new verse you memorize, revise old ones three times as much. This builds durable, long-term retention.</p>

<h2>Tip 4: Recite During Salah</h2>
<p>The best spiritual and practical review happens in your daily prayers. Make it a habit to recite your newly memorized surahs in voluntary prayers (Nafl) to reinforce them deeply.</p>

<h2>Tip 5: Work With a Certified Teacher</h2>
<p>A Hafiz teacher listens, corrects mispronunciations, tracks your progress, and keeps you accountable. Self-study alone rarely produces a strong Hifz. Book a free session with us and start your Hifz journey today.</p>',
                'featured_image'   => null,
                'seo_title'        => '5 Tips to Memorize the Quran Faster | Tajweed Ul Quran',
                'meta_description' => 'Discover 5 practical, proven techniques to memorize the Quran faster and retain it longer — tips used by certified Huffaz and Quran teachers.',
                'is_published'     => true,
            ],
            [
                'title'            => 'How Online Quran Classes Work: A Complete Guide for Parents',
                'slug'             => 'how-online-quran-classes-work-guide-for-parents',
                'content'          => '<h2>Why Online Quran Learning Is Thriving</h2>
<p>With qualified teachers scarce in many countries, millions of Muslim families around the world now turn to online Quran academies. The result? Children and adults across the UK, USA, Australia, and Canada are learning Tajweed with skilled tutors from Pakistan — without leaving their homes.</p>

<h2>What Does an Online Quran Session Look Like?</h2>
<p>A typical online session at Tajweed Ul Quran works like this:</p>
<ol>
  <li>You or your child logs into a video call (Zoom or Skype)</li>
  <li>The teacher opens the Quran and the student recites</li>
  <li>The teacher corrects pronunciation, Tajweed rules, and fluency in real time</li>
  <li>New material is assigned for the next session</li>
</ol>

<h2>Is online learning as effective as in-person?</h2>
<p>Research and experience show that <strong>1-on-1 online sessions are as effective</strong> — and in many cases more effective — than group or even in-person classes because the student gets the teacher\'s full attention for every second of the session.</p>

<h2>What Equipment Does My Child Need?</h2>
<ul>
  <li>A laptop, tablet, or smartphone with a working camera and microphone</li>
  <li>A stable internet connection</li>
  <li>A quiet, distraction-free room</li>
  <li>A copy of the Quran (physical or on screen)</li>
</ul>

<h2>Starting a Free Trial</h2>
<p>We recommend every parent to book a free 3-day trial before committing. This lets your child get comfortable with the teacher, the platform, and the teaching style — with zero financial risk.</p>',
                'featured_image'   => null,
                'seo_title'        => 'How Online Quran Classes Work: Parent\'s Guide | Tajweed Ul Quran',
                'meta_description' => 'A complete guide for parents on how online Quran classes work, what equipment is needed, and how to choose the right academy for your child.',
                'is_published'     => true,
            ],
        ];

        foreach ($posts as $post) {
            Post::updateOrCreate(
                ['slug' => $post['slug']],
                $post
            );
        }
    }
}
