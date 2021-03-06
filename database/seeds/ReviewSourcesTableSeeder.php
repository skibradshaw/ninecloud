<?php

use App\Client;
use App\ReviewSource;
use Illuminate\Database\Seeder;

class ReviewSourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
ReviewSource::create(['client_id' => Client::where('name','AAA Red Lodge Rentals')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?tbm=lcl&q=aaa+red+lodge+rentals&oq=aaa+red+lodge+rentals&gs_l=serp.3..35i39k1l2j0.6180897.6181211.0.6181595.2.2.0.0.0.0.196.322.0j2.2.0....0...1.1.64.serp..0.2.320.xVDjVJXi9xk#lrd=0x534f2a045350da45:0xe3dc9e5c0566b45f,1,&rlfi=hd:;si:16419172459550782559;mv:!1m3!1d237.0849104459873!2d-109.24682100000001!3d45.185778000000006!2m3!1f0!2f0!3f0!3m2!1i604!2i518!4f13.1']);
ReviewSource::create(['client_id' => Client::where('name','Adventure Camper')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?ei=Xd0eWvi0BMvWvgTs_L-QAw&q=Adventure+Camper+Rentals%2C+14051+E+Davies+Ave+Englewood%2C+CO+80112&oq=Adventure+Camper+Rentals%2C+14051+E+Davies+Ave+Englewood%2C+CO+80112&gs_l=psy-ab.3...26522.26925.0.27149.3.3.0.0.0.0.166.439.0j3.3.0....0...1.1.64.psy-ab..0.2.272...0j0i22i30k1.0.Bstz5UPyeV4#lrd=0x876c8f49aa9097db:0xb54ba16b7ebe838c,1,,,']);
ReviewSource::create(['client_id' => Client::where('name','AJ DeRosa Jackson Hole Vintage Adventures')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/#q=Jackson+Hole+Vintage+Adventures&lrd=0x53531a5d4d20ccc1:0x44609c03e7d5e8ae,1,']);
ReviewSource::create(['client_id' => Client::where('name','Alpenglow Tours')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?q=AlpenGlow+Tours&bav=on.2,or.&cad=b&biw=1366&bih=662&dpr=1&ech=1&psi=Ean0V9i4D4eq0QTAxI1o.1475651858133.3&ei=Ean0V9i4D4eq0QTAxI1o&emsg=NCSR&noj=1#lrd=0x535310ebd73f5685:0x89e7494c151132cc,1,']);
ReviewSource::create(['client_id' => Client::where('name','Anglers West')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?q=Angler%27s+West+Fly+Fishing+Outfitters&lrd=0x534fedf230c222d1:0x2e34b0bc49b9f6ea,1,&cad=h']);
ReviewSource::create(['client_id' => Client::where('name','Barker Ewing Float Trips')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/#q=+Barker-Ewing+Float+Trips&lrd=0x5352ffc514cdf5e9:0x488e91e1a0974984,1,']);
ReviewSource::create(['client_id' => Client::where('name','Budget Cody')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?q=budget+cody+rent+a+car&oq=budget+cody+rent+a+car&aqs=chrome..69i57j69i60j0j69i61j69i60j0.2487j0j7&sourceid=chrome&ie=UTF-8']);
ReviewSource::create(['client_id' => Client::where('name','Budget Glacier')->first()->id, 'source_name' => 'Google+','url' => 'https://goo.gl/3XjNvg']);
ReviewSource::create(['client_id' => Client::where('name','Budget Sheridan')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?q=budget+rent+a+car+sheridan+wy+reviews&oq=budget+rent+a+car+sheridan+wy+reviews&aqs=chrome..69i57.5695j0j7&sourceid=chrome&ie=UTF-8#lrd=0x5335f07d3a96ba67:0xe49809c0b1408519,1,,,']);
ReviewSource::create(['client_id' => Client::where('name','Budget Yellowstone')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/#q=Budget+Yellowstone&lrd=0x5351b9bf17b6479b:0x5bf911db85f2cf5b,1,']);
ReviewSource::create(['client_id' => Client::where('name','Clear Creek Group')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?q=clear+creek+group+jackson+wy&oq=clear+creek+group+jackson+wy&aqs=chrome..69i57j0j69i60j69i61j69i60j0.2659j0j7&sourceid=chrome&ie=UTF-8']);
ReviewSource::create(['client_id' => Client::where('name','Clubhouse Inn of West Yellowstone')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?q=clubhouse+inn+west+yellowstone&oq=clubhouse+inn+west+yellowstone&aqs=chrome..69i57j69i60l2j69i59j69i60j0.6744j0j7&sourceid=chrome&ie=UTF-8#lrd=0x5351b99602021141:0x6c259630aeb6ff7a,1,']);
ReviewSource::create(['client_id' => Client::where('name','Dry Ridge Outfitters')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/#q=Dry+Ridge+Outfitters&lrd=0x5353a382a739e6bf:0x2ce1fab15275958c,1,']);
ReviewSource::create(['client_id' => Client::where('name','Elephant Head Lodge')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/#q=Elephant+Head+Lodge&lrd=0x534e761d5044560d:0x57dd7e4265cb1dd2,1,']);
ReviewSource::create(['client_id' => Client::where('name','Fins and Feathers')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/#q=Fins+%26+Feathers+of+Bozeman&lrd=0x53454ec695561513:0xab59a17a06ac3bde,1,']);
ReviewSource::create(['client_id' => Client::where('name','Flat Creek Inn')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/#q=Flat+Creek+Inn+%26+Mart&lrd=0x53531ae0289a5e37:0xd29dce4f54088d6,1,']);
ReviewSource::create(['client_id' => Client::where('name','Flat Creek Ranch')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/maps/place/Flat+Creek+Ranch/@43.5240961,-110.5406587,18z/data=!3m1!4b1!4m12!1m2!2m1!1sFlat+Creek+Ranch+google+my+business!3m8!1s0x0:0x4fd125c6754252f9!5m1!1s2018-08-05!8m2!3d43.5240961!4d-110.539564!9m1!1b1']);
ReviewSource::create(['client_id' => Client::where('name','Grand Teton Fly Fishing')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/#q=Grand+Teton+Fly+Fishing&lrd=0x53531a67e70cfe09:0xd61d8dd7d9688fc1,1,']);
ReviewSource::create(['client_id' => Client::where('name','Gros Ventre River Ranch')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?num=100&q=Gros+Ventre+River+Ranch%2C+kelly+wy%2C+Moose%2C+WY+83012&oq=Gros+Ventre+River+Ranch%2C+kelly+wy%2C+Moose%2C+WY+83012&gs_l=serp.3..35i39k1j0i22i30k1.21213.21656.0.21835.3.3.0.0.0.0.163.322.0j2.2.0....0...1.1.64.serp..1.2.322.Ewi-EOZVQMc#lrd=0x5352fa9dec485adb:0xc9381078e786d47,1,']);
ReviewSource::create(['client_id' => Client::where('name','Halfway Hotel')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?q=halfwa+hotel+essex+mt&oq=halfwa+hotel+essex+mt&aqs=chrome..69i57j69i60l3.3607j0j7&sourceid=chrome&ie=UTF-8#q=halfway+hotel+essex+mt&lrd=0x536626919d1cad95:0x81e6608870d3b14c,1']);
ReviewSource::create(['client_id' => Client::where('name','Hostel')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/#q=the+hostel+jackson+hole&lrd=0x535305d73c5f9f9b:0xdfe844114bd8508a,1,']);
ReviewSource::create(['client_id' => Client::where('name','Inn on the Creek')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.co.in/search?q=Inn+on+the+Creek+%28Jackson+Hole%2C+WY%29+&oq=Inn+on+the+Creek+%28Jackson+Hole%2C+WY%29+&gs_l=serp.3..0i22i30k1l2.15229.16288.0.16515.2.2.0.0.0.0.410.513.0j1j4-1.2.0....0...1c.1.64.serp..0.2.510.djcKzaNgRFI#lrd=0x53531a5defca8e53:0xbdf731ff7de9f458,1,']);
ReviewSource::create(['client_id' => Client::where('name','Izaak Wallton')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?q=izaak+walton+inn+reviews&oq=izaak+walton+inn+reviews&aqs=chrome..69i57j0l5.3597j0j7&sourceid=chrome&ie=UTF-8']);
ReviewSource::create(['client_id' => Client::where('name','Jackson Hole Fly Fishing School')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/#q=Jackson+Hole+Fly+Fishing+School&lrd=0x535311d752cd5115:0x2125a4503cc1f938,1,']);
ReviewSource::create(['client_id' => Client::where('name','JH Hideout')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?q=jackson+hole+hideout+reviews&oq=jackson+hole+hideout+reviews&aqs=chrome.0.0j69i57j69i61l3j69i64.2757j0j4&sourceid=chrome&ie=UTF-8']);
ReviewSource::create(['client_id' => Client::where('name','LTD Sailing')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?rlz=1C1CHBD_enIN768IN768&ei=-WMpWp3KDsbHvgTOqYT4Bw&q=LTD%20Sailing&oq=LTD+Sailing&gs_l=psy-ab.3..0i71k1l4.9416.9703.0.9888.2.2.0.0.0.0.0.0..0.0....0...1.1.64.psy-ab..2.0.0....0.awNP9clKuhE&npsic=0&rflfq=1&rlha=0&rllag=27012298,-72860571,1914257&tbm=lcl&rldimm=9989260468637075680&ved=0ahUKEwjMyKqTofjXAhWMpI8KHUU2CXcQvS4IYDAI&rldoc=1&tbs=lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2#rlfi=hd:;si:9989260468637075680;mv:!1m3!1d18038988.20683199!2d-72.860571!3d29.289867700000002!2m3!1f0!2f0!3f0!3m2!1i298!2i486!4f13.1;tbs:lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2']);
ReviewSource::create(['client_id' => Client::where('name','Moose Creek Ranch')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.co.in/search?q=Moose+Creek+Ranch&oq=Moose+Creek+Ranch&aqs=chrome..69i57j69i61l2j69i60&sourceid=chrome&ie=UTF-8#lrd=0x53530b477cd1f5f3:0x26dca2115702b5b6,1,']);
ReviewSource::create(['client_id' => Client::where('name','Paradise Adventure Co')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/#q=Paradise+Adventure+Company&lrd=0x534fd120a1dca3a1:0x951a566a04c520b5,1,']);
ReviewSource::create(['client_id' => Client::where('name','Reel Deal Anglers')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?num=100&site=&source=hp&q=Reel+Deal+Anglers%2C+2070+Cedar+Lp+Jackson%2C+WY+83001&oq=Reel+Deal+Anglers%2C+2070+Cedar+Lp+Jackson%2C+WY+83001&gs_l=hp.3..0l2.7791.12374.0.12467.6.4.0.0.0.0.239.618.0j2j1.3.0....0...1.1.64.hp..3.3.616.0..35i39k1.j__WsVqQEok#lrd=0x535310bf88694405:0x761a3c4acf9fc576,1,']);
ReviewSource::create(['client_id' => Client::where('name','Snow King Mountain')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?num=100&site=&source=hp&q=Snow+King+Mountain+Resort&oq=Snow+King+Mountain+Resort&gs_l=hp.3..35i39k1j0l2j0i22i30k1l7.686.686.0.928.2.2.0.0.0.0.230.372.0j1j1.2.0....0...1.1.64.hp..0.1.141.0.O57zxW0An_o#lrd=0x53531a6afa92e5e9:0xc460c5aafbcb551c,1,,,']);
ReviewSource::create(['client_id' => Client::where('name','Super 8 Cody')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/#q=Super+8+Cody&lrd=0x534c1f2b38b00cc1:0xdb2c7865354f72ad,1,']);
ReviewSource::create(['client_id' => Client::where('name','Super 8 Jackson Hole')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?q=super%208%20jackson%20hole&lrd=0x53531098548f3045%3A0xe43c6abe3415fd1a%2C1%2C%2C&rct=j']);
ReviewSource::create(['client_id' => Client::where('name','Sweetwater Fly Shop')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/#q=Sweetwater+Fly+Shop&lrd=0x53457bc11b201737:0x185fd40c5f3426c8,1,']);
ReviewSource::create(['client_id' => Client::where('name','Teton Mountain Bike Tours')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?q=Teton+Mountain+Bike+Tours&rlz=1C1CHBD_enIN768IN768&oq=Teton+Mountain+Bike+Tours&aqs=chrome..69i57j69i61j69i60&sourceid=chrome&ie=UTF-8#lrd=0x53531afa69d98215:0xe1c9b0c4959eed5f,1,,,']);
ReviewSource::create(['client_id' => Client::where('name','Teton Valley Cabins')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/search?num=100&q=Teton+Valley+Cabins%2C+1+Mountain+Vista+Dr+Driggs%2C+ID+83422&oq=Teton+Valley+Cabins%2C+1+Mountain+Vista+Dr+Driggs%2C+ID+83422&gs_l=serp.3..35i39k1j0l3j0i22i30k1l4.2607.3039.0.3139.3.3.0.0.0.0.183.183.0j1.1.0....0...1.1.64.serp..2.1.182.e8BY21ivcN4#lrd=0x5353a47d8931bdd3:0xdd35207322690a55,1,']);
ReviewSource::create(['client_id' => Client::where('name','Wyoming Guide Company')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/maps/place/The+Wyoming+Guide+Company/@43.47087,-110.7521499,8z/data=!4m5!3m4!1s0x0:0xbeb8989767820aa5!8m2!3d43.47087!4d-110.7521499']);
ReviewSource::create(['client_id' => Client::where('name','Yellowstone Gateway Inn')->first()->id, 'source_name' => 'Google+','url' => 'https://www.google.com/#q=Yellowstone+Gateway+Inn&lrd=0x534fd0dc3f4f158f:0x9026072174566d9b,1,']);

ReviewSource::create(['client_id' => Client::where('name','AJ DeRosa Jackson Hole Vintage Adventures')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Attraction_Review-g60574-d1791067-Reviews-Jackson_Hole_Vintage_Adventures-Wilson_Jackson_Hole_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Alpenglow Tours')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Attraction_Review-g60491-d6564560-Reviews-Alpenglow_Tours-Jackson_Jackson_Hole_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Anglers West')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Attraction_Review-g45158-d6975725-Reviews-Angler_s_West_Fly_Fishing-Emigrant_Montana.html']);
ReviewSource::create(['client_id' => Client::where('name','Barker Ewing Float Trips')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Attraction_Review-g143029-d1657876-Reviews-Barker_Ewing_Scenic_Float_Trips-Grand_Teton_National_Park_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Clubhouse Inn of West Yellowstone')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Hotel_Review-g45399-d97291-Reviews-ClubHouse_Inn_West_Yellowstone-West_Yellowstone_Montana.html']);
ReviewSource::create(['client_id' => Client::where('name','Dry Ridge Outfitters')->first()->id, 'source_name' => 'Trip Advisor','url' => 'http://www.tripadvisor.com/Attraction_Review-g35437-d5058205-Reviews-Dry_Ridge_Outfitters_Private_Day_Trips-Driggs_Idaho.html']);
ReviewSource::create(['client_id' => Client::where('name','Elephant Head Lodge')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Hotel_Review-g60442-d503655-Reviews-Elephant_Head_Lodge-Cody_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Fins and Feathers')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Attraction_Review-g45095-d10278441-Reviews-Fins_Feathers_of_Bozeman-Bozeman_Montana.html']);
ReviewSource::create(['client_id' => Client::where('name','Flat Creek Inn')->first()->id, 'source_name' => 'Trip Advisor','url' => 'http://www.tripadvisor.com/Hotel_Review-g60491-d122906-Reviews-Flat_Creek_Inn-Jackson_Jackson_Hole_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Flat Creek Ranch')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Hotel_Review-g60491-d577109-Reviews-Flat_Creek_Ranch-Jackson_Jackson_Hole_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Grand Teton Fly Fishing')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Attraction_Review-g60491-d1792844-Reviews-Grand_Teton_Fly_Fishing-Jackson_Jackson_Hole_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Gros Ventre River Ranch')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Hotel_Review-g60496-d145488-Reviews-Gros_Ventre_River_Ranch-Kelly_Jackson_Hole_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Halfway Hotel')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Hotel_Review-g45160-d620030-Reviews-Half_Way_Hotel-Essex_Montana.html']);
ReviewSource::create(['client_id' => Client::where('name','Hostel')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Hotel_Review-g60562-d557516-Reviews-The_Hostel-Teton_Village_Jackson_Hole_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Inn on the Creek')->first()->id, 'source_name' => 'Trip Advisor','url' => 'http://www.tripadvisor.com/Hotel_Review-g60491-d83851-Reviews-Inn_on_the_Creek-Jackson_Jackson_Hole_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Izaak Wallton')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Hotel_Review-g45160-d78983-Reviews-Izaak_Walton_Inn-Essex_Montana.html']);
ReviewSource::create(['client_id' => Client::where('name','Jackson Hole Fly Fishing School')->first()->id, 'source_name' => 'Trip Advisor','url' => 'http://www.tripadvisor.com/Attraction_Review-g60491-d6715434-Reviews-Jackson_Hole_Fly_Fishing_School-Jackson_Jackson_Hole_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','JH Hideout')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Hotel_Review-g60574-d83924-Reviews-Jackson_Hole_Hideout-Wilson_Jackson_Hole_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','LTD Sailing')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Attraction_Review-g147296-d4992440-Reviews-LTD_Sailing-St_George_s_Saint_George_Parish_Grenada.html']);
ReviewSource::create(['client_id' => Client::where('name','Moose Creek Ranch')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Hotel_Review-g35627-d599986-Reviews-Moose_Creek_Ranch-Victor_Idaho.html']);
ReviewSource::create(['client_id' => Client::where('name','Paradise Adventure Co')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Attraction_Review-g45184-d2389555-Reviews-Paradise_Adventure_Company-Gardiner_Montana.html']);
ReviewSource::create(['client_id' => Client::where('name','Reel Deal Anglers')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Attraction_Review-g60491-d1024336-Reviews-Reel_Deal_Anglers_Day_Trips-Jackson_Jackson_Hole_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Snow King Mountain')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Attraction_Review-g60491-d274136-Reviews-Snow_King_Mountain-Jackson_Jackson_Hole_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Super 8 Cody')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Hotel_Review-g60442-d225520-Reviews-Super_8_Cody-Cody_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Super 8 Jackson Hole')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Hotel_Review-g60491-d101222-Reviews-Super_8_Jackson_Hole-Jackson_Jackson_Hole_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Sweetwater Fly Shop')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Attraction_Review-g45253-d8296267-Reviews-Sweetwater_Fly_Shop-Livingston_Montana.html']);
ReviewSource::create(['client_id' => Client::where('name','Teton Mountain Bike Tours')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Attraction_Review-g60491-d3287298-Reviews-Teton_Mountain_Bike_Tours_Day_Tours-Jackson_Jackson_Hole_Wyoming.html']);
ReviewSource::create(['client_id' => Client::where('name','Teton Valley Cabins')->first()->id, 'source_name' => 'Trip Advisor','url' => 'http://www.tripadvisor.com/Hotel_Review-g35437-d312335-Reviews-Teton_Valley_Cabins-Driggs_Idaho.html']);
ReviewSource::create(['client_id' => Client::where('name','Wyoming Guide Company')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.in/Attraction_Review-g1798760-d7116660-Reviews-The_Wyoming_Guide_Company-Jackson_Hole_Wyoming.html#REVIEWS']);
ReviewSource::create(['client_id' => Client::where('name','Yellowstone Gateway Inn')->first()->id, 'source_name' => 'Trip Advisor','url' => 'https://www.tripadvisor.com/Hotel_Review-g45184-d2268823-Reviews-Yellowstone_Gateway_Inn-Gardiner_Montana.html']);

ReviewSource::create(['client_id' => Client::where('name','AAA Red Lodge Rentals')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/aaa-red-lodge-rentals-red-lodge']);
ReviewSource::create(['client_id' => Client::where('name','Adventure Camper')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/adventure-camper-rentals-englewood-3?osq=adventure+camper']);
ReviewSource::create(['client_id' => Client::where('name','AJ DeRosa Jackson Hole Vintage Adventures')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/aj-derosas-wooden-boat-river-tours-wilson-2']);
ReviewSource::create(['client_id' => Client::where('name','Alpenglow Tours')->first()->id, 'source_name' => 'Yelp','url' => 'https://www.yelp.com/biz/alpenglow-tours-jackson-2']);
ReviewSource::create(['client_id' => Client::where('name','Anglers West')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/anglers-west-fly-fishing-outfitters-emigrant']);
ReviewSource::create(['client_id' => Client::where('name','Barker Ewing Float Trips')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/barker-ewing-float-trips-scenic-moose']);
ReviewSource::create(['client_id' => Client::where('name','Budget Cody')->first()->id, 'source_name' => 'Yelp','url' => 'https://www.yelp.com/biz/budget-rent-a-car-cody']);
ReviewSource::create(['client_id' => Client::where('name','Budget Glacier')->first()->id, 'source_name' => 'Yelp','url' => 'https://www.yelp.com/biz/budget-car-rental-kalispell']);
ReviewSource::create(['client_id' => Client::where('name','Budget Sheridan')->first()->id, 'source_name' => 'Yelp','url' => 'https://www.yelp.com/biz/budget-rent-a-car-sheridan']);
ReviewSource::create(['client_id' => Client::where('name','Budget Yellowstone')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/budget-car-and-truck-rental-west-yellowstone#query:budget']);
ReviewSource::create(['client_id' => Client::where('name','Clear Creek Group')->first()->id, 'source_name' => 'Yelp','url' => 'https://www.yelp.com/biz/the-clear-creek-group-jackson']);
ReviewSource::create(['client_id' => Client::where('name','Clubhouse Inn of West Yellowstone')->first()->id, 'source_name' => 'Yelp','url' => 'https://www.yelp.com/biz/clubhouse-inn-west-yellowstone']);
ReviewSource::create(['client_id' => Client::where('name','Dry Ridge Outfitters')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/dry-ridge-outfitters-felt']);
ReviewSource::create(['client_id' => Client::where('name','Elephant Head Lodge')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/elephant-head-lodge-cody-2']);
ReviewSource::create(['client_id' => Client::where('name','Fins and Feathers')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/fins-and-feathers-bozeman?osq=fly+shop']);
ReviewSource::create(['client_id' => Client::where('name','Flat Creek Inn')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/flat-creek-inn-jackson']);
ReviewSource::create(['client_id' => Client::where('name','Flat Creek Ranch')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/flat-creek-ranch-jackson']);
ReviewSource::create(['client_id' => Client::where('name','Grand Teton Fly Fishing')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/grand-teton-fly-fishing-jackson']);
ReviewSource::create(['client_id' => Client::where('name','Gros Ventre River Ranch')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/gros-ventre-river-ranch-moose-2#query:gros%20ventre%20river%20ranch']);
ReviewSource::create(['client_id' => Client::where('name','Halfway Hotel')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/halfway-hotel-essex']);
ReviewSource::create(['client_id' => Client::where('name','Hostel')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/the-hostel-teton-village']);
ReviewSource::create(['client_id' => Client::where('name','Inn on the Creek')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/inn-on-the-creek-jackson']);
ReviewSource::create(['client_id' => Client::where('name','Izaak Wallton')->first()->id, 'source_name' => 'Yelp','url' => 'https://www.yelp.com/biz/izaak-walton-inn-essex']);
ReviewSource::create(['client_id' => Client::where('name','Jackson Hole Fly Fishing School')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/jackson-hole-fly-fishing-school-jackson']);
ReviewSource::create(['client_id' => Client::where('name','JH Hideout')->first()->id, 'source_name' => 'Yelp','url' => 'https://www.yelp.com/biz/jackson-hole-hideout-wilson']);
ReviewSource::create(['client_id' => Client::where('name','Moose Creek Ranch')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/moose-creek-ranch-victor-2#atb_alias:AboutThisBizBio/query:moose%20creek%20ranch']);
ReviewSource::create(['client_id' => Client::where('name','Paradise Adventure Co')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/paradise-adventure-company-gardiner']);
ReviewSource::create(['client_id' => Client::where('name','Reel Deal Anglers')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/reel-deal-anglers-jackson']);
ReviewSource::create(['client_id' => Client::where('name','Snow King Mountain')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/snow-king-mountain-jackson']);
ReviewSource::create(['client_id' => Client::where('name','Super 8 Cody')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/super-8-cody-cody']);
ReviewSource::create(['client_id' => Client::where('name','Super 8 Jackson Hole')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/super-8-jackson-hole-jackson-hole']);
ReviewSource::create(['client_id' => Client::where('name','Sweetwater Fly Shop')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/sweetwater-fly-shop-livingston']);
ReviewSource::create(['client_id' => Client::where('name','Teton Mountain Bike Tours')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/teton-mountain-bike-tours-jackson']);
ReviewSource::create(['client_id' => Client::where('name','Teton Valley Cabins')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/teton-valley-cabins-driggs#query:teton%20valley%20cabins']);
ReviewSource::create(['client_id' => Client::where('name','Wyoming Guide Company')->first()->id, 'source_name' => 'Yelp','url' => 'https://www.yelp.com/biz/the-wyoming-guide-company-jackson']);
ReviewSource::create(['client_id' => Client::where('name','Yellowstone Gateway Inn')->first()->id, 'source_name' => 'Yelp','url' => 'http://www.yelp.com/biz/yellowstone-gateway-inn-gardiner']);

ReviewSource::create(['client_id' => Client::where('name','Budget Cody')->first()->id, 'source_name' => 'Facebook','url' => 'https://www.yelp.com/biz/budget-rent-a-car-cody']);
ReviewSource::create(['client_id' => Client::where('name','Budget Glacier')->first()->id, 'source_name' => 'Facebook','url' => 'https://www.yelp.com/biz/budget-car-rental-kalispell']);
ReviewSource::create(['client_id' => Client::where('name','Clear Creek Group')->first()->id, 'source_name' => 'Facebook','url' => 'https://www.yelp.com/biz/the-clear-creek-group-jackson']);
ReviewSource::create(['client_id' => Client::where('name','Wyoming Guide Company')->first()->id, 'source_name' => 'Facebook','url' => 'https://www.yelp.com/biz/the-wyoming-guide-company-jackson']);

		$clients = Client::all();
        foreach($clients as $c)
        {
            
            $taSource = $c->sources()->where('source_name','Trip Advisor')->first();

            if(!empty($taSource))
            {
                $url = $taSource->url;
                $parts = parse_url($url);
                // dd($parts);
                // parse_str($parts['path'], $query);
                preg_match('~-d(.*?)-~', $parts['path'], $result);
                // echo $result[1] . "<br>";  
                $taSource->source_identifier = $result[1];
                $taSource->save();       
                // $data->put($c->name,$repo->getLocationData($taSource->source_identifier));           
            }    
        }

    }
}
