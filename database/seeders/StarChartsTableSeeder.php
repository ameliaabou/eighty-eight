<?php

namespace Database\Seeders;

use App\Models\StarChart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StarChartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * sail artisan make:seeder StarChartsSeeder
     * @return void
     */
    public function run()
    {
        StarChart::truncate();

        $star_charts =  [
            [
                'month' => 'January',
                'image_name' => 'january',
                'download_bw' => 'sc_jan_bw',
                'download_c' => 'sc_jan_c',
                'details' => 'The new year opens with a spectacular array of planets lined up in the western sky soon after sunset. Mercury, Venus, Jupiter, and Saturn offer nightly fascination. A crescent Moon skips along this line of planets over a few nights early in the month. The inner pair of planets, Mercury and Venus, swaps places in the first week of January. Mercury remains in view through midmonth, while Jupiter and Saturn are visible all month. Uranus and Neptune can be spotted with binoculars, riding high in the southern sky after sunset. Only Mars is missing from the nightly lineup — it’s over in the morning sky, transiting the rich star clouds of the Milky Way. The Quadrantids, which originate in what is now the northern region of Boötes, are active between Dec. 28 and Jan. 12. The narrow peak of activity (six hours, according to the International Meteor Organization) occurs Jan. 3. With the Moon near New, if the weather cooperates, the chances are good for a fine view. The predawn hours are always the best time to view meteor showers, and the Quadrantids are no exception. The radiant rises late in the evening and by 4 A.M. local time, it’s about 40° high. Expect about 25 to 30 meteors per hour if the peak occurs during the dark window of your observing site, corresponding to a zenithal hourly rate of 100 to 120. Look also for the occasional fireball known to occur with this shower.'
            ],
            [
                'month' => 'February',
                'image_name' => 'february',
                'download_bw' => 'sc_feb_bw',
                'download_c' => 'sc_feb_c',
                'details' => 'Venus achieves its greatest brilliancy, dominating the predawn sky all month with its spectacular glow. Mars and Mercury join the dawn chorus of planets, and late in the month Saturn reappears from behind the Sun. With Jupiter heading for conjunction with our star, there are five major planets spanning less than 50° along the ecliptic by the end of February. There are no major meteor showers this month, but it’s still worth venturing out into the country in search of dark skies. While sporadic meteors can be seen at any time, February is also a good time to spot the zodiacal light. Our solar system is filled with the dusty remains of long-dead comets. Sunlight reflecting off these billions of meteoritic particles causes the zodiacal light. It is detectable by eye soon after sunset under the right conditions. Select an observing location where the western sky is very dark, with few towns sporting street lighting. As the sky darkens, an hour or so after sunset, a cone-shaped glow similar to the Milky Way will become visible. It will appear steeply angled from the western horizon and aligned with the ecliptic, extending upward through Taurus the Bull. Observers located at higher altitudes are at an advantage, as they avoid the deeper dust-laden atmosphere of Earth.'
            ],
            [
                'month' => 'March',
                'image_name' => 'march',
                'download_bw' => 'sc_mar_bw',
                'download_c' => 'sc_mar_c',
                'details' => 'Venus continues to dominate in the morning, along with a retinue of fellow planets gracing the predawn sky. Mars, Saturn, and elusive Mercury provide lots to observe. Jupiter largely is hidden from view after its conjunction with the Sun. Meanwhile, the evening sky carries William Herschel’s great discovery of 1781, the planet Uranus, easily visible in binoculars. For the second month in a row, no major meteor showers occur. This offers two opportunities for observers. One is looking for the background, or sporadic, meteor rate. The best times this month occur during the dark Moon period beginning March 1. A First Quarter Moon on March 9 sets before 2 A.M. local time, offering dark morning skies. Sporadic rates average a half-dozen meteors per hour. Morning skies are best because you’re on the leading hemisphere of Earth as we orbit the Sun, so meteors strike the atmosphere head-on. Evening rates tend to be lower as we look back along our orbit, as if viewing out the rear-facing window of planet Earth, so meteors have to catch up with us. The second opportunity for observers this month is viewing the zodiacal light in the evening sky. Your best chances are the first few days of March before the Moon interferes and the last week of the month, when again the Moon is out of the way. Zodiacal light comes from sunlight reflecting off fine dusty debris littering the inner solar system. This is the detritus left by ancient comets. Once twilight has faded, look for a delicate cone-shaped glow extending above the western horizon. You’ll need a very dark moonless sky with no interfering lights. The zodiacal light is aligned with the ecliptic, Earth’s orbital plane, and passes through Pisces, Aries, and Taurus. Try using peripheral vision to spot the arching cone of light by scanning left to right along the horizon.'
            ],
            [
                'month' => 'April',
                'image_name' => 'april',
                'download_bw' => 'sc_apr_bw',
                'download_c' => 'sc_apr_c',
                'details' => 'Mercury is at its best for Northern Hemisphere observers this month. It’s a highlight in the evening sky. The rest of the planetary action takes place in the morning, with the finest conjunction of the year between the two brightest planets, Jupiter and Venus, on the last day of the month. In the run-up to that conjunction, Mars, Venus and Saturn open the month in a fine display that constantly changes appearance and makes April mornings a good time to spring out of bed early and catch the continuing spectacle each day. The Annual Lyrid meteor shower is active from April 14 to 30 and peaks the night of April 22. Its radiant rises in late evening and stands about 30° high at local midnight. This offers a few hours of dark skies before the 21-day-old Moon rises on the morning of the 22nd. Meteors are always more prevalent in the hours before sunrise because the relative impact speed of shower particles on Earth’s atmosphere is higher. As you prepare for the morning display of planets, which rises in the east soon after 4 A.M. local time, keep a lookout for the occasional flash from a Lyrid meteor. The Moon will slightly diminish the number of meteors you see. However, Lyra is above 80° in altitude by now, so you could catch 5 to 10 brighter shower members per hour.'
            ],
            [
                'month' => 'May',
                'image_name' => 'may',
                'download_bw' => 'sc_may_bw',
                'download_c' => 'sc_may_c',
                'details' => "A total eclipse of the Moon greets observers of the sky this month. It’s perfectly timed for the evening of May 15 across the U.S. and the early morning hours of May 16 in Europe, Africa, and the Middle East. Meanwhile, catch Mercury early in May, ending its period of best evening viewing this year for Northern Hemisphere skygazers. It quickly sinks out of view. This leaves planetary observers to enjoy the pre-dawn treat of four visible planets, starting out with Venus and Jupiter spectacularly close, while Saturn and Mars continue to climb higher in the morning sky. The visibility of the eclipse is time zone dependent. East Coast observers will see the whole eclipse in a dark sky. In the Midwest, the Full Moon rises in the eastern sky with the penumbral stages underway, enhancing the effect of the subtly progressing shadow. Observers in the Mountain time zone see the partial eclipse already underway in twilight. From the West Coast, the onset of totality occurs in twilight and the later stages of the eclipse are visible in a dark sky. The Eta Aquariids are favorable this year due to a near-First Quarter Moon that sets between midnight and 1 A.M. local time, offering dark skies during the early morning hours of the May 6 peak. The shower is active from April 19 through May 28, as Earth sails through debris that Halley’s Comet shed during one of its many orbits. On mornings away from the peak, rates are very low for Northern Hemisphere observers due to the low altitude of the radiant. The radiant lies near Zeta (ζ) and Gamma (γ) Aquarii, and rises shortly before 3 A.M. local time in the continental U.S. It reaches an altitude of nearly 20° one hour later, just as the first signs of twilight begin. The low altitude attenuates the zenithal hourly rate of 50 meteors per hour down to an expected observable rate of five to 10 per hour. These swift meteors travel at some 40 miles per second."
            ],
            [
                'month' => 'June',
                'image_name' => 'june',
                'download_bw' => 'sc_jun_bw',
                'download_c' => 'sc_jun_c',
                'details' => 'There are no major meteor showers this month — a lull before late summer, when the shows pick up again. There are minor showers but they are hard to track, generating only a handful of observable meteors per hour. Regularly recording summer meteors helps researchers track these minor showers, so check with the International Meteor Organization to help. Be on the lookout for noctilucent (night-glowing) cloud activity. These pearly clouds appear 50 miles high — more than 10 times the altitude of cirrus clouds. They are produced when ice crystals form on high-flying dust particles. Noctilucent clouds appear between latitudes of 55° and 70° north, remaining in sunlight for hours after sunset during summer. They are usually seen toward the northern horizon. More to come on June 1st!'
            ],
            [
                'month' => 'July',
                'image_name' => 'july',
                'download_bw' => 'sc_jul_bw',
                'download_c' => 'sc_jul_c',
                'details' => 'The shorter summer evenings still offer a wide range of planetary events for casual and serious observers alike. Venus dominates the evening sky, while Mars lingers in twilight as well. The midnight sky brings Jupiter and Saturn into view as they approach their best appearance for the year. Binoculars can track down Uranus and Neptune, both of which lie near field stars. Mercury makes an appearance as dawn breaks; see if you can catch it before the Sun bakes the sky blue. Meteor showers are fickle things. We can only predict expected rates per hour, which are heavily dependent on your location, the amount of street lighting and moonlight, and the height of the radiant above the horizon. All this means that predicted rates are usually tempered a great deal. Such is the fate of the Southern Delta Aquariids, which can produce 20 to 25 meteors per hour on a good night with the radiant overhead. But for those at mid-northern latitudes, the radiant climbs only to 30° in altitude, reducing the expected number to 10 per hour. A waning gibbous Moon provides a lot of light on the peak date of July 30, limiting visible meteors to the brightest ones. More to come July 1st!'
            ],
            [
                'month' => 'August',
                'image_name' => 'august',
                'download_bw' => 'sc_aug_bw',
                'download_c' => 'sc_aug_c',
                'details' => "On early August evenings, you’ll find three rocky planets in the sky: Venus, Mars, and Mercury. Venus is easy to spot, so use it as a guide to find the other two, which are more challenging in twilight. Overnight there’s a planet spectacular starring Saturn and Jupiter, both of which reach opposition this month. Jupiter provides some unique satellite events not to be missed if you have a telescope. Binocular viewers can track down distant giants Uranus and Neptune in the morning sky. One of the Year’s best showers, the Perseids, occurs in August. This year, conditions are very favorable with no Moon after midnight. The Perseids peak Aug. 12 during the day for U.S. observers; the mornings of the 12th and 13th should provide good rates. If your weather is poor, try the 10th and 11th as well. On Aug. 12, a four-day-old Moon sets soon after 10:30 P.M. local time, offering ideal dark sky conditions for meteor observing. The radiant in Perseus rises to around 60° in the hour before dawn, attenuating the listed zenithal hourly rate (which occurs when the radiant is at 90° elevation) of 110 meteors per hour by about 15 percent. This converts to an average of one meteor per minute in the predawn hours. More to come August 1st!"
            ],
            [
                'month' => 'September',
                'image_name' => 'september',
                'download_bw' => 'sc_sep_bw',
                'download_c' => 'sc_sep_c',
                'details' => 'Six major planets are in view before midnight during September, offering a full range of binocular and telescopic sights. Mercury and Venus hug the western horizon soon after sunset, while Jupiter and Saturn provide a dazzling spectacle in the southeast. Both planets are well placed all evening. Uranus and Neptune are best viewed in binoculars or a telescope. After the flurry of major showers in August, meteor rates die down significantly in September. The sporadic or background rate of meteors reaches an average of seven meteors per hour, although the occasional fireball not associated with any shower can illuminate the night sky, so watch out for those events. Meanwhile, in early September’s moonless predawn sky, look out for a delta-shaped brightening stretching from Cancer into Gemini along the steeply inclined ecliptic before the onset of twilight. It’s the zodiacal light, best observed from very dark locations far from any streetlights. The glow is from trillions of meteoritic dust particles left over from eons of comets cruising through the inner solar system, dumping fine material as the Sun heats their surface. More to come September 1st!'
            ],
            [
                'month' => 'October',
                'image_name' => 'october',
                'download_bw' => 'sc_oct_bw',
                'download_c' => 'sc_oct_c',
                'details' => "Mercury springs into action in the last two weeks of October, offering its best morning appearance this year. Venus, by contrast, hangs low in the southwestern sky all month. Jupiter and Saturn dominate the evening sky, visible through midnight. And late-evening binocular views of Uranus and Neptune beckon more adventurous observers. This month’s Full Moon falls within a day of the Oct. 21 peak of the Orionid meteor shower. Moonlight will effectively diminish the visibility of all shower meteors except for the brightest ones, so observed rates will be very low this year. The Orionid shower is directly linked to debris left over by the regular 76-year passages Halley’s Comet. The shower is active from Oct. 2 through Nov. 7, with much lower rates outside the night of maximum. A few Orionid meteors can be observed in the early morning sky the week before Full Moon — the best opportunity for spotting Orionids this year. For example, on Oct. 13, the First Quarter Moon sets around midnight, as Orion is rising. The dark sky will offer views of early shower members, but at much lower rates than the peak of 20 meteors per hour at maximum. More to come October 1st!"
            ],
            [
                'month' => 'November',
                'image_name' => 'november',
                'download_bw' => 'sc_nov_bw',
                'download_c' => 'sc_nov_c',
                'details' => "Venus, Jupiter, and Saturn dominate the evening sky with lots of planetary action in November. Highlights include Venus’ quickly changing phase; Jupiter’s atmosphere, Great Red Spot, and Galilean moon transits; and Saturn’s stunning rings. Uranus reaches opposition and is on view all night, and for a bigger challenge, hunt down distant Neptune. The annual Leonid meteor shower peaks Nov. 17 and is active between Nov. 6 and 30. This month’s Full Moon shortly after maximum strongly affects the shower’s visibility, so conditions are unfavorable around the peak. Focusing on the week prior to maximum is your best bet. On Nov. 12, the Moon sets at local midnight, just as Leo rises in the east. By Nov. 16, the Moon sets around 4 A.M. local time, offering more than an hour of dark skies before twilight interferes. This is likely your best morning to observe the Leonids. The zenithal hourly rate of 10 meteors per hour this year means that even by the 16th, very few shower members will be observed, barring any surprises. The Leonid shower is associated with Comet 55P/Swift-Tuttle, which last reached perihelion in 1998. More to come November 1st!"
            ],
            [
                'month' => 'December',
                'image_name' => 'december',
                'download_bw' => 'sc_dec_bw',
                'download_c' => 'sc_dec_c',
                'details' => "December’s early-evening sky offers a slew of planetary views, beginning with Venus, Saturn, and Jupiter — all on show soon after sunset. Capture the top features of the solar system in one evening by spotting the changing phase of Venus; the spectacular rings of Saturn; and the remarkably dynamic jovian atmosphere, its Great Red Spot, and Jupiter’s four bright moons. Two major meteor showers occur in December each year: the Geminids (Dec. 4–17, peaking on the 14th), and the Ursids (Dec. 17–26, peaking on the 22nd). A waxing gibbous Moon lies in Pisces for the Geminids’ peak, resulting in moonlight interfering until our satellite sets around 3 a.m. local time, offering a couple of hours of dark skies. The Geminids are one of the most favorable shower of the year, with close to 150 meteors per hour when Gemini is near the zenith. Although the Moon will affect this rate heavily, patient skywatchers can wait for the occasional bright event, which are usually spectacular. The Ursids’ peak is strongly affected by the Moon all night and this year the prospects are very poor for this shower. More to come December 1st!"
            ],
          ];

          StarChart::insert($star_charts);
    }
}
