<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Blog')->insert([
            'title' => '15 Tips For A Perfect Makeup',
            'image' => 'https://pro-theme.com/html/viasun/assets/img/img-article-gallery-1.jpg',
            'category' => 'makeup',
            'content' => 'Enim venia quis nostrud exrcit ulamco laboris niust aliquip conse reprehen derity fugiat nulla pariatur excpteur sint ipsum occaecat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercit ation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'status' => 1,
            'created_at' => Carbon::now()->addDay(-1),
        ]);
        DB::table('Blog')->insert([
            'title' => '7 Tips for Choosing the Right Lipstick for You',
            'image' => 'https://wl-brightside.cf.tsp.li/resize/728x/jpg/15e/444/b26ba15078ba9fd65034e14fd8.jpg',
            'category' => 'lipstick',
            'content' => 'Lipstick is the first thing that comes to mind when we think about makeup. Adding color to the lips can make a huge difference to the features of your face. A poorly chosen shade of lipstick can easily destroy your whole look. That is why it is important to choose a color that suits you.',
            'status' => 1,
            'created_at' => Carbon::now()->addDay(-1),
        ]);
        DB::table('Blog')->insert([
            'title' => '10 celebrities who went makeup-free on the red carpet and looked absolutely stunning',
            'image' => 'https://wl-brightside.cf.tsp.li/resize/728x/jpg/c20/da8/8982e25e15ad4e01c6fc3a611d.jpg',
            'category' => 'makeup',
            'content' => 'There is a new trend among celebrities to appear on the red carpet with little or no makeup. This is a really challenging experience as we’re all used to seeing our favorite celebrities with perfect makeup. You have to be really brave to go against the stereotypes of society and pose in front of the cameras au naturel.',
            'status' => 1,
            'created_at' => Carbon::now()->addDay(-1),
        ]);
        DB::table('Blog')->insert([
            'title' => 'Benefits of Using Natural Shampoo',
            'image' => 'https://s3.images-iherb.com/blog/uploads/benefits-of-using-natural-shampoo-large.jpg',
            'category' => 'shampoo',
            'content' => 'Except for the follicle, your hair is basically dead. So does it really matter if your shampoo contains chemicals and other toxins?',
            'status' => 1,
            'created_at' => Carbon::now()->addDay(-1),
        ]);
        DB::table('Blog')->insert([
            'title' => '5 Reasons To Use Sunscreen Every Day',
            'image' => 'https://lona.top/wp-content/uploads/2017/08/cach-chon-kem-chong-nang.jpg',
            'category' => 'Sunscreen',
            'content' => 'Your skin is your largest organ and has essential functions such as guarding your body against germs as well as helping to regulate your body’s temperature. While your skin also offers your body protection from the sun’s rays, that doesn’t mean you should go out without giving your skin proper protection in return. Without sunscreen, your skin is vulnerable to a host of problems. Here are five reasons why you should use sunscreen daily.',
            'status' => 1,
            'created_at' => Carbon::now()->addDay(-1),
        ]);
        DB::table('Blog')->insert([
            'title' => 'Are Age Spots an Early Sign of Skin Cancer?',
            'image' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.…0902.jpg?crop=1xw:0.872xh;center,top&resize=980:*',
            'category' => 'Skin Cancer',
            'content' => 'Also known as “sunspots” or “liver spots,” age spots are caused by sun exposure and can be most prevalent on the face, back, back of the hands, shoulders, and arms. Skin cancer growths could be mistaken as age spots, which is why it is crucial to understand the differences. Here is what you need to know.',
            'status' => 1,
            'created_at' => Carbon::now()->addDay(-1),
        ]);
        DB::table('Blog')->insert([
            'title' => 'History of Perfume',
            'image' => 'https://www.tailormadefragrance.com/media/wysiwyg/x3.jpg.pagespeed.ic.ykRiI9nVd0.webp',
            'category' => 'Perfume',
            'content' => 'Perfume is a powerful tool to express our personality, build our self-image and engage with  others. Fragrances, in fact, accompany us in everyday life and tell something about us, raising memories and feelings.',
            'status' => 1,
            'created_at' => Carbon::now()->addDay(-1),
        ]);
        DB::table('Blog')->insert([
            'title' => 'The Best Pregnancy Safe Shampoo of 2021',
            'image' => 'https://www.experiencedmommy.com/wp-content/uploads/2020/12/best-pregnancy-safe-shampoo-2...00.jpg',
            'category' => 'Shampoo',
            'content' => 'Below, you’ll find our top choices for shampoo for all hair types, whether you’re experiencing luscious locks or if you’re one of the 40 to 50 percent of women who experience hair loss during pregnancy. Always consult with your obstetrician before starting any products during pregnancy.  Essential oils are controversial during pregnancy.',
            'status' => 1,
            'created_at' => Carbon::now()->addDay(-1),
        ]);
        DB::table('Blog')->insert([
            'title' => 'TOP 10 PERFUMES TO GET IN FRANCE',
            'image' => 'https://www.obonparis.com/uploads/TOP%2010%20PERFUMES/PERFUMERIE%20MONGE_LF%20(1)-2.JPG',
            'category' => 'Perfume',
            'content' => 'France is easily known as the home of perfumes. Many worldwide perfumes are produced here, so it would be a benefit to you to buy one when you visit France, as there are many special discounts. There are also some perfume products that are sold only in France even though they are from world-class brands. However, it is difficult to determine which perfume will be a perfect match for you or a perfect gift fo your friend, so, we will introduce the 10 best selling French perfumes which you can buy at Parfumerie Monge.',
            'status' => 1,
            'created_at' => Carbon::now()->addDay(-1),
        ]);
        DB::table('Blog')->insert([
            'title' => 'The Best Lipstick For Older Women in 2021',
            'image' => 'https://beautywithhollie.com/wp-content/uploads/2021/06/The-Best-Lipstick-For-Older-Women...00.jpg',
            'category' => 'Lipstick',
            'content' => 'Three things every ageing woman is looking for in a lipstick is non-drying, hydrating and a lipstick that doesn’t settle in lines. I think it’s fair to say that wearing lipstick that causes the lips to peel kinda defeats the purpose of lipstick at all! And what’s more, is that it doesn’t have to be that way. In fact, it shouldn’t! You can wear any colour or shade of lipstick without it affecting your lips negatively. Those with dry or ageing skin, especially older women over 50 have trouble with this the most. The good news is, we’re here to fix that for you! We’ve put together the best lipsticks for older women, say hello to perfect lips no matter your age or skin type!',
            'status' => 1,
            'created_at' => Carbon::now()->addDay(-1),
        ]);
    }
}
