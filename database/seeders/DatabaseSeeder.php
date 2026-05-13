<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(AdminSeeder::class);

        $masterList = [
            // --- FACE CARE CATEGORIES ---
            'cleanser' => [
                [
                    'name' => 'Gentle Glow', 
                    'price' => 1200, 
                    'img' => 'cl1.jpeg',
                    'description' => "Experience the ultimate purity with Gentle Glow Cleanser. \nDesigned purely for sensitive skin, this formula removes impurities without stripping moisture. \nEnriched with Chamomile and Vitamin E, it soothes irritation while cleansing. \nMaintain your skin's natural pH balance with every wash. \nA daily essential for a radiant, soft, and glowing complexion."
                ],
                [
                    'name' => 'Herbal Fresh', 
                    'price' => 1300, 
                    'img' => 'cl2.webp',
                    'description' => "Revitalize your skin with the power of nature using Herbal Fresh Cleanser. \nInfused with Neem and Tea Tree Oil, it actively fights acne-causing bacteria. \nDeeply penetrates pores to remove excess oil and dirt build-up. \nLeaves your skin feeling cool, refreshed, and invigorated. \nPerfect for oily and combination skin types seeking a herbal touch."
                ],
                [
                    'name' => 'Deep Purify', 
                    'price' => 1500, 
                    'img' => 'cl3.png',
                    'description' => "Achieve a deep, professional-grade clean with Deep Purify Cleanser. \nActivated Charcoal draws out toxins and pollutants from deep within the skin. \nSalicylic Acid helps unclog pores and prevent future breakouts. \nRefines skin texture for a smoother, clearer appearance. \nIdeal for urban environments and congestion-prone skin."
                ],
                [
                    'name' => 'Aqua Balance', 
                    'price' => 1400, 
                    'img' => 'cl4.webp',
                    'description' => "Restore hydration while you cleanse with Aqua Balance. \nFormulated with Hyaluronic Acid to lock in moisture instantly. \nGently removes makeup and daily grime without tightness. \nSupports the skin's lipid barrier for long-lasting comfort. \nThe perfect choice for dry and dehydrated skin needing a hydration boost."
                ],
                [
                    'name' => 'Soothing Aloe', 
                    'price' => 1600, 
                    'img' => 'cl5.jpg',
                    'description' => "Calm and comfort your skin with our Soothing Aloe Cleanser. \nPure Aloe Vera extract reduces redness and inflammation on contact. \ngentle foaming action lifts away debris softly and effectively. \nFree from harsh sulfates and artificial fragrances. \nA gentle embrace for stressed, sun-exposed, or reactive skin."
                ],
                [
                    'name' => 'Bee Factor', 
                    'price' => 1200, 
                    'img' => 'cl6.jpg',
                    'description' => " harness the healing power of Propolis and Honey with Bee Factor. \nNaturally antibacterial, it promotes skin healing and rejuvenation. \nRich in antioxidants to fight early signs of aging. \nLeaves skin feeling nourished, supple, and incredibly soft. \nSuitable for all skin types looking for a natural, nutrient-rich cleanse."
                ],
            ],
            'facewash' => [
                [
                    'name' => 'Carrot Face Wash', 
                    'price' => 950, 
                    'img' => 'fce1.jpeg',
                    'description' => "Reveal brighter skin with nutrient-rich Carrot Face Wash. \nPacked with Beta-Carotene and Vitamin A to promote cell turnover. \nHelps fade dark spots and evens out skin tone over time. \nGentle enough for daily use, leaving a healthy, sun-kissed glow. \nAn affordable yet effective solution for dull and tired-looking skin."
                ],
                [
                    'name' => 'Papaya Face Wash', 
                    'price' => 1000, 
                    'img' => 'fce2.webp',
                    'description' => "Exfoliate naturally with the enzymatic power of Papaya Face Wash. \nPapain enzymes gently dissolve dead skin cells for a brighter surface. \nVitamin C helps reduce pigmentation and boosts collagen production. \nLeaves skin feeling fresh, smooth, and visibly lighter. \nPerfect for achieving an even complexion and refined texture."
                ],
                [
                    'name' => 'O’Nelle Face Wash', 
                    'price' => 1200, 
                    'img' => 'fce3.jpg',
                    'description' => "Experience the luxury of O’Nelle Face Wash for ageless beauty. \nEnriched with botanical extracts that firm and tighten the skin. \nReduces the appearance of fine lines while cleaning deeply. \nProvides a spa-like experience with its calming aroma. \nIdeal for mature skin needing extra care and rejuvenation."
                ],
                [
                    'name' => 'Coconut Face Wash', 
                    'price' => 1100, 
                    'img' => 'fce4.webp',
                    'description' => "Hydrate and soften with the tropical goodness of Coconut Face Wash. \nCoconut water extracts provide deep hydration and electrolytes. \nRemoves impurities while keeping the skin's moisture barrier intact. \nRich in antioxidants to protect against environmental stressors. \nLeaves skin feeling dewy, plump, and smelling like a tropical paradise."
                ],
                [
                    'name' => 'Strawberry Face Wash', 
                    'price' => 1050, 
                    'img' => 'fce5.png',
                    'description' => "Sweeten your skincare routine with Strawberry Face Wash. \nNatural fruit acids (AHAs) gently exfoliate and control oil production. \nRich in Vitamin C to brighten and energize the complexion. \nFights off free radicals for younger, fresher-looking skin. \nGreat for oily skin types prone to blackheads and shine."
                ],
                [
                    'name' => 'Spa Ceylon Face Wash', 
                    'price' => 1500, 
                    'img' => 'fce6.jpg',
                    'description' => "Indulge in holistic Ayurveda with Spa Ceylon Face Wash. \nBlended with exotic herbs and essential oils for balance. \nPurifies the skin while calming the mind and senses. \nDetoxifies pores and improves overall skin vitality. \nA premium choice for those seeking luxury and wellness in one bottle."
                ],
            ],
            'Moisturizer' => [
                [
                    'name' => 'Vanicream', 
                    'price' => 1400, 
                    'img' => 'mos1.jpg',
                    'description' => "Dermatologist-recommended Vanicream for sensitive skin care. \nFree from dyes, fragrance, lanolin, and parabens. \nProvides intense, long-lasting hydration without clogging pores. \nSoothes red, irritated, or eczema-prone skin effectively. \nThe safest choice for hyper-sensitive and reactive skin types."
                ],
                [
                    'name' => 'Neutrogena', 
                    'price' => 1600, 
                    'img' => 'mos2.webp',
                    'description' => "Lightweight hydration meets power with Neutrogena Hydro Boost. \nGel-cream formula absorbs instantly for zero greasy residue. \nPacked with Hyaluronic Acid to keep skin hydrated for 48 hours. \nOil-free and non-comedogenic, perfect for wearing under makeup. \nIdeal for oily to normal skin seeking a refreshing moisture kick."
                ],
                [
                    'name' => 'Biotherm', 
                    'price' => 1500, 
                    'img' => 'mos3.webp',
                    'description' => "Regenerate your skin with the aquatic power of Biotherm. \nInfused with Life Plankton™ to heal and renew skin cells. \nRestores radiance and improves skin elasticity visibly. \nProtects against urban pollution and daily aggressors. \nA premium moisturizer for maintaining youthful, resilient skin."
                ],
                [
                    'name' => 'Face Reality', 
                    'price' => 1700, 
                    'img' => 'mos4.png',
                    'description' => "Clarify and hydrate with Face Reality ClearaSkin Moisturizer. \nSpecially formulated for acne-prone skin to reduce breakouts. \nContains soothing botanicals to calm inflammation and redness. \nLightweight texture that won't clog pores or cause shine. \nThe ultimate balance of hydration and acne control."
                ],
                [
                    'name' => 'Vitamin Boost', 
                    'price' => 1800, 
                    'img' => 'mos5.jpg',
                    'description' => "Energize dull skin with our Vitamin Boost Moisturizer. \nLoaded with Vitamins C, E, and B5 for total skin health. \nBrightens complexion and fades signs of fatigue instantly. \nStrengthens the skin barrier against external damage. \nYour daily dose of nutrients for a vibrant, healthy look."
                ],
                [
                    'name' => 'Nivea Soft', 
                    'price' => 1300, 
                    'img' => 'mos6.webp',
                    'description' => "Experience the classic softness of Nivea Soft Moisturizer. \nEnriched with Jojoba Oil and Eucerit for deep nourishment. \nFast-absorbing cream that leaves skin feeling smooth and supple. \nVersatile enough for face, hands, and body usage. \nA trusted family favorite for reliable, everyday hydration."
                ],
            ],
            'serum' => [
                [
                    'name' => 'Carrot Serum', 
                    'price' => 2200, 
                    'img' => 'se1.jpeg',
                    'description' => "Concentrated brightness with our intensive Carrot Serum. \nHighly potent Beta-Carotene oil penetrates deep into the dermis. \nAccelerates regeneration for scars and sun-damaged skin. \nImproves skin elasticity and reduces fine lines significantly. \nA powerful treatment for aging and pigmented skin."
                ],
                [
                    'name' => 'Papaya Serum', 
                    'price' => 2500, 
                    'img' => 'se2.jpeg',
                    'description' => "Unveil glass-like skin with our Papaya Brightening Serum. \nContains concentrated Papain enzyme for continuous exfoliation. \nTargets dark spots, melasma, and uneven skin tone actively. \nLightweight formula that layers perfectly with other products. \nAchieve a luminous, translucent glow with regular use."
                ],
                [
                    'name' => "O'Nelle Serum", 
                    'price' => 2800, 
                    'img' => 'se3.jpeg',
                    'description' => "The gold standard of anti-aging: O'Nelle Ageless Serum. \nFormulated with peptides and collagen boosters to firm skin. \nVisibly fills wrinkles and lifts sagging contours. \nRestores youthful bounce and density to thin, aging skin. \nLuxury care for those who demand the best for their skin."
                ],
                [
                    'name' => 'Coconut Serum', 
                    'price' => 2600, 
                    'img' => 'se4.jpeg',
                    'description' => "Deep nourishment in a bottle: Coconut Hydration Serum. \nRich in fatty acids to repair a damaged moisture barrier. \nSoothes dryness and flakiness instantly upon application. \nProvides a protective shield against harsh weather conditions. \nA savior for dry, cracked, or winter-worn skin."
                ],
                [
                    'name' => 'Strawberry Serum', 
                    'price' => 2300, 
                    'img' => 'se5.jpeg',
                    'description' => "Pore-refining perfection with Strawberry Clarifying Serum. \nSalicylic Acid from strawberries unclogs and shrinks pores. \nControls excess sebum production throughout the day. \nKeeps skin matte, smooth, and blemish-free. \nEssential for achieving a refined, airbrushed skin texture."
                ],
                [
                    'name' => 'Spa Ceylon Serum', 
                    'price' => 3000, 
                    'img' => 'se6.jpeg',
                    'description' => "Royal Ayurvedic care with Spa Ceylon Precious Serum. \nInfused with saffron, sandalwood, and turmeric extracts. \nPromotes golden radiance and heals skin imperfections. \nBalances the three Doshas for holistic skin health. \nA luxurious ritual for glowing, regal-looking skin."
                ],
            ],
            'suncreen' => [
                [
                    'name' => 'SunShield SPF 50', 
                    'price' => 1500, 
                    'img' => 'sun1.jpeg',
                    'description' => "Maximum protection with SunShield SPF 50 Broad Spectrum. \nBlocks 98% of harmful UVA and UVB rays effectively. \nWater-resistant formula ideal for swimming and sports. \nNon-greasy finish that won't leave a white cast. \nYour ultimate defense against sunburn and photo-aging."
                ],
                [
                    'name' => 'Golden Glow SPF 30', 
                    'price' => 1300, 
                    'img' => 'sun2.jpeg',
                    'description' => "Protect and bronze with Golden Glow SPF 30 Tinted Sunscreen. \nProvides sun protection while adding a sheer, healthy tint. \nEvens out skin tone and blurs imperfections instantly. \nEnriched with antioxidants to fight environmental damage. \nPerfect for a 'no-makeup' makeup look with added safety."
                ],
                [
                    'name' => "AquaGuard SPF 45", 
                    'price' => 1400, 
                    'img' => 'sun3.jpeg',
                    'description' => "Hydrating sun care with AquaGuard SPF 45 Gel. \nWater-based formula feels weightless on the skin. \nCools and refreshes whilst providing strong UV protection. \nWon't clog pores or cause breakouts in humidity. \nIdeal for oily skin and hot, tropical climates."
                ],
                [
                    'name' => 'Herbal Defense SPF 40', 
                    'price' => 1350, 
                    'img' => 'sun4.jpeg',
                    'description' => "Natural sun safety with Herbal Defense SPF 40. \nMineral-based blocker using Zinc Oxide and Titanium Dioxide. \nInfused with Aloe and Cucumber to soothe sun-heated skin. \nSafe for sensitive skin and children over 6 months. \nChemical-free protection for the whole family."
                ],
                [
                    'name' => 'Tropical Sun SPF 35', 
                    'price' => 1200, 
                    'img' => 'sun5.jpeg',
                    'description' => "Enjoy the sun responsibly with Tropical Sun SPF 35. \nInfused with Coconut Oil for a tan-enhancing effect. \nProtects against burning while allowing a golden glow. \nSmells like a beach vacation, feels like silk. \nGreat for beach days and leisurely outdoor activities."
                ],
                [
                    'name' => 'Daily Protect SPF 25', 
                    'price' => 1100, 
                    'img' => 'sun6.jpeg',
                    'description' => "Everyday urban defense with Daily Protect SPF 25. \nLightweight lotion designed for indoor and office wear. \nProtects against blue light from screens and UV rays. \nMoisturizing formula acts as a great makeup primer. \nEssential for daily prevention of premature aging."
                ],
            ],
            // --- BODY CARE CATEGORIES ---
            'bodylotion' => [
                [
                    'name' => 'Binara', 
                    'price' => 1200, 
                    'img' => 'Binara.jpg',
                    'description' => "Wrap your body in floral elegance with Binara Body Lotion. \nScented with the rare Binara flower for a unique aroma. \nDeeply hydrates dry patches, elbows, and knees. \nLeaves skin feeling velvety soft and delicately perfumed. \nA romantic, luxurious treat for your daily post-shower routine."
                ],
                [
                    'name' => 'Kasthurikaha', 
                    'price' => 1500, 
                    'img' => 'kasthurikaha.webp',
                    'description' => "Brighten your body with Kasthurikaha (Wild Turmeric) Lotion. \nTraditional Ayurvedic formula for glowing, golden skin. \nHelps reduce tan lines and dark spots on the body. \nAntibacterial properties keep skin healthy and clear. \nEmbrace the golden glow of ancient beauty rituals."
                ],
                [
                    'name' => 'Fern', 
                    'price' => 1300, 
                    'img' => 'fern3.jpg',
                    'description' => "Refresh your senses with the crisp scent of Fern Body Lotion. \nLightweight, fast-absorbing formula for on-the-go hydration. \nCools the skin and revitalizes tired muscles. \nPerfect for summer days or after a workout session. \nLeaves a clean, green, and invigorating trail."
                ],
                [
                    'name' => 'Red Sandalwood', 
                    'price' => 1700, 
                    'img' => 'red3.webp',
                    'description' => "Luxurious calm with Red Sandalwood Body Lotion. \nSandalwood oil soothes inflammation and prickly heat. \nDeeply moisturizes while calming the mind with its scent. \nReduces body acne and improves skin texture. \nA soothing balm for irritated or sensitive body skin."
                ],
                [
                    'name' => 'Dlas', 
                    'price' => 1400, 
                    'img' => 'dlas3.webp',
                    'description' => "Experience the purity of nature with Dlas Herbal Lotion. \nBlend of five essential herbs for total skin nourishment. \nRepairs dry, cracked skin and protects against roughness. \nNon-greasy formula suitable for the entire family. \nReliable, herbal care for soft and healthy skin."
                ],
                [
                    'name' => 'Lotus', 
                    'price' => 1600, 
                    'img' => 'OLU.jpg',
                    'description' => "Hydrate divinely with the essence of Blue Lotus. \nRich in natural antioxidants and relaxing floral notes. \nPromotes tranquility and stress relief upon application. \nLeaves skin radiant, smooth, and heavenly scented. \nTurn your moisturizing routine into a mindful ritual."
                ],
            ],
            'showergel' => [
                [
                    'name' => 'Refreshing Mint Gel', 
                    'price' => 1200, 
                    'img' => 'shower1.webp',
                    'description' => "Wake up your body with Refreshing Mint Shower Gel. \nCooling menthol sensation jumpstarts your morning. \nCleanses sweat and dirt effectively without drying. \nLeaves you feeling energized and icy fresh. \nThe perfect summer or post-gym shower companion."
                ],
                [
                    'name' => 'Citrus Blast Gel', 
                    'price' => 1300, 
                    'img' => 'shower2.jpg',
                    'description' => "Zest up your life with Citrus Blast Shower Gel. \nInfused with Orange, Lemon, and Lime extracts. \nVitamin C brightens body skin and invigorates senses. \nCuts through grease and oil for a squeaky clean feel. \nA burst of sunshine in your daily shower."
                ],
                [
                    'name' => 'Aloe Vera Gel', 
                    'price' => 1400, 
                    'img' => 'shower3.webp',
                    'description' => "Sooth and cleanse with gentle Aloe Vera Shower Gel. \nSoap-free formula respects the skin's natural pH. \nHydrates while cleansing, leaving skin soft, not tight. \nCalms sun-exposed or sensitive skin instantly. \nA gentle touch for delicate skin needs."
                ],
                [
                    'name' => 'Ocean Breeze Gel', 
                    'price' => 1500, 
                    'img' => 'shower4.png',
                    'description' => "Dive into freshness with Ocean Breeze Shower Gel. \nMarine minerals detoxify and remineralize the skin. \nCrisp, aquatic scent lingers for hours after washing. \nRevitalizes dull skin and washes away fatigue. \nBring the refreshing power of the sea home."
                ],
                [
                    'name' => 'Lavender Calm Gel', 
                    'price' => 1600, 
                    'img' => 'shower5.webp',
                    'description' => "Unwind deeply with Lavender Calm Shower Gel. \nNatural Lavender oil promotes relaxation and sleep. \nGently cleanses away the stress of the day. \nLeaves skin soft, moisturized, and peaceful. \nThe ideal choice for a relaxing night-time shower."
                ],
                [
                    'name' => 'Tropical Paradise Gel', 
                    'price' => 1700, 
                    'img' => 'shower6.jpg',
                    'description' => "Escape to an island with Tropical Paradise Shower Gel. \nExotic blend of Mango, Pineapple, and Papaya scents. \nEnzymes gently exfoliate for smoother skin. \nCreates a rich, fruity lather that feels luxurious. \nA mini-vacation for your senses every day."
                ],
            ],
            'bodyscrub' => [
                [
                    'name' => 'Sugar Glow', 
                    'price' => 1400, 
                    'img' => 'scrub3.jpeg',
                    'description' => "Polish your skin to perfection with Sugar Glow Scrub. \nNatural sugar crystals buff away dead skin cells. \nGlycolic acid promotes cell turnover for brightness. \nDissolves easily without leaving a gritty residue. \nReveals soft, glowing, and touchable skin."
                ],
                [
                    'name' => 'Coffee Revive', 
                    'price' => 1500, 
                    'img' => 'scrub4.jpeg',
                    'description' => "Banish cellulite and dullness with Coffee Revive Scrub. \nGround Robusta coffee beans stimulate blood flow. \nCaffeine helps tighten and firm the skin's appearance. \nRich antioxidants fight premature aging of body skin. \nAn energizing scrub for smooth, firm legs and body."
                ],
                [
                    'name' => 'Coconut Smooth', 
                    'price' => 1600, 
                    'img' => 'scrub5.jpeg',
                    'description' => "Creamy exfoliation with Coconut Smooth Body Scrub. \nShredded coconut and oil hydrate while scrubbing. \nGentle enough for sensitive or dry skin types. \nLeaves a protective moisture layer after rinsing. \nGet totally smooth, coconut-scented skin instantly."
                ],
                [
                    'name' => 'Sea Salt Scrub', 
                    'price' => 1700, 
                    'img' => 'scrub6.jpeg',
                    'description' => "Detoxify vigorously with mineral-rich Sea Salt Scrub. \nCoarse sea salt granules provide deep exfoliation. \nDraws out impurities and toxins from the pores. \nStimulates circulation for a healthy, rosy glow. \nBest for rough patches like heels, elbows, and knees."
                ],
                [
                    'name' => 'Lavender Calm', 
                    'price' => 1800, 
                    'img' => 'scrub7.jpeg',
                    'description' => "Relax and refine with Lavender Calm Body Scrub. \nFine exfoliating particles infused with Lavender oil. \nPolishes skin gently while soothing the mind. \nPrepares skin for better absorption of lotions. \nA spa-like treatment for a peaceful evening."
                ],
                [
                    'name' => 'Rose Bliss', 
                    'price' => 1900, 
                    'img' => 'scrub8.jpeg',
                    'description' => "Romance your skin with Rose Bliss Body Scrub. \nCrushed rose petals and oils soften and scent the skin. \nGentle exfoliation suitable for delicate areas. \nLeaves skin feeling silky, fragrant, and pampered. \nThe ultimate self-care indulgence."
                ],
            ],
            'bodysunscreen' => [
                [
                    'name' => 'SunShield SPF 50', 
                    'price' => 2000, 
                    'img' => 'sunb1.jpeg',
                    'description' => "Full body armor: SunShield SPF 50 Body Lotion. \nHigh-performance protection for long days outdoors. \nSweat-proof formula stays on during activity. \nPrevents sunburn on shoulders, back, and legs. \nEssential gear for beach trips and hiking."
                ],
                [
                    'name' => 'Golden Glow SPF 30', 
                    'price' => 1800, 
                    'img' => 'sunb2.jpeg',
                    'description' => "Glow while you protect with Golden Glow SPF 30 Body. \nShimmering particles enhance your natural tan. \nProvides moderate protection for tanned or darker skin. \nHydrating formula keeps skin from peeling. \nLook like a bronzed goddess while staying safe."
                ],
                [
                    'name' => 'AquaGuard SPF 45', 
                    'price' => 2200, 
                    'img' => 'sunb3.jpeg',
                    'description' => "Sport-ready protection: AquaGuard SPF 45 Body Spray. \nQuick-dry spray application for hard-to-reach areas. \nCooling mist refreshes hot skin immediately. \nSand-resistant and non-sticky finish. \nPerfect for active lifestyles and water sports."
                ],
                [
                    'name' => 'Herbal Defense SPF 40', 
                    'price' => 2100, 
                    'img' => 'sunb7.webp',
                    'description' => "Nature's shield for your body: Herbal Defense SPF 40. \nBiodegradable formula safe for coral reefs and oceans. \nInfused with antioxidants to repair sun damage. \nThick, creamy barrier against harsh midday sun. \nEco-friendly protection for the conscious traveler."
                ],
                [
                    'name' => 'Tropical Sun SPF 35', 
                    'price' => 1900, 
                    'img' => 'sunb5.jpg',
                    'description' => "Scent of summer: Tropical Sun SPF 35 Body Lotion. \nRich Coconut and Shea Butter moisturize deeply. \nProtects skin from drying out in salt water. \nEnhances tan longevity and vibrancy. \nA pleasure to apply, a necessity to wear."
                ],
                [
                    'name' => 'Daily Protect SPF 25', 
                    'price' => 1600, 
                    'img' => 'sunb6.webp',
                    'description' => "Everyday body care: Daily Protect SPF 25 Lotion. \nLight enough for daily wear under clothes. \nPrevents 'driver's arm' tan and sun spots. \nKeeps body skin youthful and elastic. \nMake sun protection a daily habit, head to toe."
                ],
            ],
            'deodorant' => [
                [
                    'name' => 'Fresh Breeze', 
                    'price' => 900, 
                    'img' => 'deo1.jpeg',
                    'description' => "Stay confident all day with Fresh Breeze Deodorant. \n24-hour odor protection with a crisp, airy scent. \nAluminum-free formula lets skin breathe naturally. \nNon-staining, clear application for all fabric types. \nReliable freshness for your busiest days."
                ],
                [
                    'name' => 'Cool Mist', 
                    'price' => 1000, 
                    'img' => 'deo2.jpeg',
                    'description' => "Feel the chill with Cool Mist Anti-Perspirant. \nAdvanced sweat-control technology keeps you dry. \nCooling sensation upon application soothes underarms. \nFresh, aquatic fragrance suitable for everyone. \nMaximum dryness for high-intensity situations."
                ],
                [
                    'name' => 'Herbal Shield', 
                    'price' => 1200, 
                    'img' => 'deo3.jpeg',
                    'description' => "Natural odor defense: Herbal Shield Deodorant. \nUses Sage and Tea Tree to neutralize bacteria. \nFree from parabens, alcohol, and harsh chemicals. \nGentle on sensitive or freshly shaved skin. \nEffective, natural protection you can trust."
                ],
                [
                    'name' => 'Active Guard', 
                    'price' => 1300, 
                    'img' => 'deo4.jpeg',
                    'description' => "Built for performance: Active Guard Sport Deodorant. \nMotion-activated fragrance capsules release scent as you move. \nResists sweat breakdown during heavy workouts. \nStrong, energizing scent to keep you motivated. \nThe athlete's choice for odor control."
                ],
                [
                    'name' => 'Tropical Fresh', 
                    'price' => 1100, 
                    'img' => 'deo5.jpeg',
                    'description' => "Island freshness: Tropical Fresh Roll-On. \nScented with exotic fruits and florals. \nConditioning formula softens underarm skin. \nProvides all-day freshness with a sweet touch. \nFeel sweet and confident from morning to night."
                ],
                [
                    'name' => 'Daily Comfort', 
                    'price' => 1000, 
                    'img' => 'deo6.jpeg',
                    'description' => "Gentle and effective: Daily Comfort Stick. \nCreamy formula glides on smooth with no drag. \nBalanced pH prevents irritation and darkening. \nSubtle, clean scent triggers no allergies. \nComfortable protection for everyday wear."
                ],
            ],
        ];

        foreach ($masterList as $subCategory => $products) {
            foreach ($products as $item) {
                // Determine Main Category
                $faceCareTypes = ['cleanser', 'facewash', 'Moisturizer', 'serum', 'suncreen'];
                $mainCategory = in_array($subCategory, $faceCareTypes) ? 'FaceCare' : 'BodyCare';

                // Ensure Category exists in the database (Fix for dynamic Navbar)
                \App\Models\Category::firstOrCreate(
                    ['name' => $subCategory], // Check by name
                    [
                        'group' => $mainCategory,
                        'slug' => \Illuminate\Support\Str::slug($subCategory)
                    ]
                );

                Product::updateOrCreate(
                    ['name' => $item['name']], // Search by name to prevent duplicates
                    [
                        'category'    => $mainCategory,
                        'type'        => $subCategory,
                        'price'       => $item['price'],
                        'description' => $item['description'],
                        'image'       => $item['img'],
                        'stock'       => 15,
                    ]
                );
            }
        }
    }
}