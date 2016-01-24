<?php

use Illuminate\Database\Seeder;
use App\Models\POI;
use App\Models\PoiCategory;
use App\Models\Location;

class POIsSeeder extends Seeder
{
  DB::table('locations')->delete();
  DB::table('categories')->delete();
	DB::table('pois')->delete();


    // ----------
    // LOCATIONS
    // ----------
    Location::create([
       "id" => "1",
       "address" =>"Ζακύνθου 2,Αθήνα 113 61,Ελλάδα",
       "title" => "Δημοτική Αγορά Κυψέλης",
       "lat" => "38.0008542",
       "lng" => "23.7356316"
    ]);


    Location::create([
       "id" => "2",
       "address" =>"Νέγρη Φωκίωνος 15,Αθήνα 112 57,Ελλάδα",
       "title" => "Ρίγανη",
       "lat" => "38.0009786",
       "lng" => "23.7328532"
    ]);

Location::create([
       "id" => "3",
       "address" =>"Μηθύμνης 43, Αθήνα 112 52",
       "title" => "Rebound",
       "lat" => "38.0020856",
       "lng" => "23.7327782"
    ]);

Location::create([
       "id" => "4",
       "address" =>"Φωκίωνος Νέγρη 19-Αθήνα 112 52",
       "title" => "Φοίβος",
       "lat" => "38.00094",
       "lng" => "23.73555"
    ]);

Location::create([
       "id" => "5",
       "address" =>"Φωκίωνος Νέγρη- Αθήνα 112 52",
       "title" => "Άγαλμα Σκύλου",
       "lat" => "38.0012606",
       "lng" => "23.7352654"
    ]);

Location::create([
       "id" => "6",
       "address" =>"Φωκίωνος Νέγρη-Αθήνα 112 52",
       "title" => "Fountain",
       "lat" => "38.0012606",
       "lng" => "23.7352654"
    ]);

Location::create([
       "id" => "7",
       "address" =>"Φωκίωνος Νέγρη 70-Αθήνα 112 52",
       "title" => "Φαίδρα",
       "lat" => "38.0016289",
       "lng" => "23.7378905"
    ]);

Location::create([
       "id" => "8",
       "address" =>"Φωκίωνος Νέγρη-Αθήνα 112 52",
       "title" => "Bust Of Kotzias",
       "lat" => "38.0012606",
       "lng" => "23.7352654"
    ]);

Location::create([
       "id" => "9",
       "address" =>"Φωκίωνος Νέγρη 49, Αθήνα 113 61",
       "title" => "Trypa",
       "lat" => "38.0017464",
       "lng" => "23.739931"
    ]);

Location::create([
       "id" => "10",
       "address" =>"Φωκίωνος Νέγρη 49, Αθήνα 113 61",
       "title" => "Mezedomachies Greek Tavern",
       "lat" => "38.0017464",
       "lng" => "23.7373976"
    ]);

Location::create([
       "id" => "11",
       "address" =>"Φωκίωνος Νέγρη 16, Αθήνα 112 57",
       "title" => "Gallery Citronne",
       "lat" => "38.0006135",
       "lng" => "23.7329589"
    ]);

Location::create([
       "id" => "12",
       "address" =>"Κεφαλληνίας 11 και Κυκλάδων, Αθήνα 113 61",
       "title" => "Odou Kukladon Theater",
       "lat" => "37.9986851",
       "lng" => "23.7342332"
    ]);

Location::create([
       "id" => "13",
       "address" =>"Πλατεία Κυψέλης, Φωκίωνος Νέγρη 65, Αθήνα 113 61 ",
       "title" => "Another Fountain",
       "lat" => "38.00262",
       "lng" => "23.74171"
    ]);

    // ----------
    // CATEGORIES
    // ----------
    PoiCategory::create([
       "id" => "1",
       "title" => "Food",
       "slug" => str_slug("Food"),
       "icon" => 'fa fa-cutlery'
    ]);
    PoiCategory::create([
       "id" => "2",
       "title" => "Drinks",
       "slug" => str_slug("Drinks"),
       "icon" => 'fa fa-beer'
    ]);

    PoiCategory::create([
       "id" => "3",
       "title" => "Dance",
       "slug" => str_slug("Dance"),
       "icon" => 'fa fa-star'
    ]);
    PoiCategory::create([
       "id" => "4",
       "title" => "Art",
       "slug" => str_slug("Art"),
       "icon" => 'glyphicon glyphicon-music'
    ]);
    PoiCategory::create([
       "id" => "5",
       "title" => "Landmarks",
       "slug" => str_slug("Landmarks"),
       "icon" => 'fa fa-bank'
    ]);

    PoiCategory::create([
       "id" => "6",
       "title" => "Dejour",
       "slug" => str_slug("Dejour"),
       "icon" => 'glyphicon glyphicon-gift'
    ]);

    // ----------
    // POIs
    // ----------
    POI::create([
    	"id" =>"1",
    	"title" => "Foivos"
    	"category_id" => "2",
    	"body" => "cafe-bar",
    	"thumb" => "https://lh5.googleusercontent.com/proxy/HapSYVPPOVqE-Yrfx1xSph71n7lqkMmTij2tnRr8hZqMUVKccTekYLOJmD4NT5CiML1uBwsNSJdlNkYaSBCSr0T9HGWebuCqMn9sILaWzw-XGOLSq9t4hjmO7yOaS8cLhTLct9TOSIrm37zAWhrx=s16383",
    	"location_id" => "4"
	]);
    POI::create([
    	"id" =>"2",
    	"title" => "Dog",
    	"category_id" => "5",
    	"body" => "sculpture",
    	"thumb" => "https://lh4.googleusercontent.com/proxy/Lnr2_CccCb9HVfSX986vHbOVbdlG0UAN1nSkJq8TqjBm-IO7d5w1PGsgqsEWtkb875lYKiK2oUHC5OGwpFHDQnSUOExzsqfF2su4oP83iNFiFSh8g_KHXF8lj5uS8VREzGzTlYXGdvCNtIFokAT_=s16383",
    	"map_url" => "",
    	"location_id" => "1"
	   ]);

       POI::create([
      "id" =>"3",
      "title" => "Fountain",
      "category_id" => "5",
      "body" => "",
      "thumb" => "https://lh5.googleusercontent.com/proxy/gFk4IZbO9ix4IRiK5R2blN1XHk3VDIIzXmxyqFL984422703usyw2ZxIXrv5Tpj4EZTFMMrw86J6b-Tk9OmxHwIoFO9HBwpFkDk6yxJrccTVg69-44q1kbpzXs2kKzxsc3sdK4pK29ozgm-fLivI=s16383",
      "map_url" => "",
      "location_id" => "6"
  ]);

POI::create([
      "id" =>"4",
      "title" => "Phaedra",
      "category_id" => "1",
      "body" => "Greek Tavern",
      "thumb" => "https://lh4.googleusercontent.com/proxy/no0YmQdo0aFSLuY4WwqYVn7bU8fzaOga8FWAyAu9sSGQk_ASb9XfEXPkXf7B8Lg8d7bjcGdksQStYpuAhloUahOsVQLq74N0bmsQtfaZreY7ct8Loy7NhY8HM6-CMtYivtZusjhIvxoOnfxuzIa_=s16383",
      "map_url" => "",
      "location_id" => "7"
  ]);

POI::create([
      "id" =>"5",
      "title" => "Rebound",
      "category_id" => "3",
      "body" => "Club",
      "thumb" => "https://lh4.googleusercontent.com/proxy/R_QltneJZouohzk8ELraSMDdRz2JweQgSC9leqxcqnUFQe19Vr0B-ciXsTSaIHer8aN7SWVZrMpNnGXW8I1xh_fizzGu5dGcLltDoAMTQSmeB8X0bW7Vk4VTCCN1AQZ5bHEeAQlBrNK6yG_YQHZk=s16383",
      "map_url" => "",
      "location_id" => "3"
  ]);

POI::create([
      "id" =>"6",
      "title" => "Ρίγανη",
      "category_id" => "1",
      "body" => "Greek Tavern",
      "thumb" => "https://lh6.googleusercontent.com/proxy/xHppssibLYE895o9VViLK4vzW5JMIpM-mt0zL_QlsN7hD8H-ZZGTvRhEkgqqKlueNBfawUXt4_I1ebrOOdIyHxadYU1R8w4DPcFKIeBwFv7WyHM9rP60MlM2RRaVhrGt_9osty1kuHEYqbnUc_12=s16383",
      "map_url" => "https://www.google.com/maps/place/%CE%A1%CE%AF%CE%B3%CE%B1%CE%BD%CE%B7/@38.0009786,23.7328532,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x2166f14a21d76c15",
      "location_id" => "2"
  ]);

POI::create([
      "id" =>"7",
      "title" => "Municipal Market",
      "category_id" => "5",
      "body" => "",
      "thumb" => "https://lh6.googleusercontent.com/proxy/jnqSRXQyrNmJXVbEFpj-cywYwps4sUvYDT1CltFfOi9JBAAJXG9yqoN8-JBWaNZ-VKjCv3PH-C-uz_AtvNtx9IppYpg3LdGXGJwnA5forw7yPxIEzRPtFVwa5GZUHyhgeoFF7M09wn1jfEgBvuhz=s16383",
      "map_url" => "https://www.google.com/maps/place/%CE%94%CE%97%CE%9C%CE%9F%CE%A4%CE%99%CE%9A%CE%97+%CE%91%CE%93%CE%9F%CE%A1%CE%91+%CE%9A%CE%A5%CE%A8%CE%95%CE%9B%CE%97%CE%A3/@38.0008542,23.7356316,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x4d56674f73eef154",
      "location_id" => "1"
  ]);
POI::create([
      "id" =>"8",
      "title" => "Bust of Kotzias",
      "category_id" => "5",
      "body" => "Sculpture",
      "thumb" => "https://lh5.googleusercontent.com/proxy/mbcnHig3vjR9SB0CcjkVrfpPaAaPHeBjak1SFRUzL4tVIrQMvgb1JsC6thNasCwmQeC6vUo77gMqk6fDxv5M8pywumrJLX2kjsYv75XRNGzgt5THjBPkabVQe4njRxQVrH0EtJgh6Nc04CacgHS5=s16383",
      "map_url" => "",
      "location_id" => "8"
  ]);

POI::create([
      "id" =>"9",
      "title" => "Trypa",
      "category_id" => "2",
      "body" => "cafe bar",
      "thumb" => "https://lh4.googleusercontent.com/proxy/fUqLQgEz0X3QtmoUSFZ85yDcBEujS47kJlg8SQQPpbtwUXI6QLEsm5QSpe7LIjeBvELbscpnOSop1ZSCd4_cJQdjTISmPzvO9aQ1Njp5M2cqZ-ksV0oKsQ-mYuf5XoK6leGUkHe0pq0_ZixRXsB6=s16383",
      "map_url" => "https://www.google.com/maps/place/%CE%A6%CF%89%CE%BA%CE%AF%CF%89%CE%BD%CE%BF%CF%82+%CE%9D%CE%AD%CE%B3%CF%81%CE%B7+49,+%CE%91%CE%B8%CE%AE%CE%BD%CE%B1+113+61,+%CE%95%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1/@38.0017464,23.7373976,17z/data=!3m1!4b1!4m2!3m1!1s0x14a1a2b807bdaa89:0xab352ca96afee146",
      "location_id" => "9"
  ]);

POI::create([
      "id" =>"10",
      "title" => "Mededomachies",
      "category_id" => "1",
      "body" => "Greek Tavern",
      "thumb" => "https://lh6.googleusercontent.com/proxy/IReoRNZS_CVfKM80NbPPNM7136pzhdkagg-jHi-EfyOW-yVyFhBr0Nzy8-maM8oWF9VbfY5gBF1XOMYtp7zL00B7BAiwaoGlSzq0dY_L2-H2hcCB_RZdbmV_Fk4v4jo0SiGfZt0dVYutczFz161y=s16383",
      "map_url" => "",
      "location_id" => "10"
  ]);

POI::create([
      "id" =>"11",
      "title" => "Gallery Citronne",
      "category_id" => "4",
      "body" => "",
      "thumb" => "https://lh3.googleusercontent.com/proxy/YFUJ94kBUhUFi-z7Rau0xwvgeatZ0FOPq7_y3lJdILNChrfjjOQIdy7FNcfdOHvUVYhiZYSKWCVR32-ZVx5_q6KBkQS4twetdlEzLcFkrR_gMWvRWeocZhMe3KWLpd0HDlNnYRA8HD11Tj8NZcRW=s16383",
      "map_url" => "https://www.google.com/maps/place/%CE%A6%CF%89%CE%BA%CE%AF%CF%89%CE%BD%CE%BF%CF%82+%CE%9D%CE%AD%CE%B3%CF%81%CE%B7+16,+%CE%91%CE%B8%CE%AE%CE%BD%CE%B1+112+57,+%CE%95%CE%BB%CE%BB%CE%AC%CE%B4%CE%B1/@38.0006135,23.7329589,17z/data=!3m1!4b1!4m2!3m1!1s0x14a1a2c8ea2781db:0x5ae3a7d200b9d73a",
      "location_id" => "11"
  ]);

POI::create([
      "id" =>"12",
      "title" => "Odou Kukladon Theater",
      "category_id" => "4",
      "body" => "Lefteris Boyatzis",
      "thumb" => "https://lh3.googleusercontent.com/proxy/WMGP7or7REX_6z6O0no0M9ABfN7wtjwqf8Zm456tLr9D6kSIfWMHGV53eaWuSlWJtpt5WfDrPI_pgHjAe-fAHYoM0JJF4b7RJQXkDoOgNLX-fF48Cj6DEftFs3Jzn9gocCKwY6H0gtF4TYqc4OBi=s16383",
      "map_url" => "",
      "location_id" => "12"
  ]);

POI::create([
      "id" =>"13",
      "title" => "Another Fountain",
      "category_id" => "5",
      "body" => "",
      "thumb" => "https://lh5.googleusercontent.com/proxy/0qkbFCUIAZNHYggDQso08Va2lrm0YsMRMjhFvc08LPX_XKxeCeFSFlq-RWfixF5k-a2zuny2yuDrLq1j2f4KQ5GoDI1nVAStGfw2qPXADKD9dm9OCWzqgLF8ysWJ0C4zajqgnkNjZJAAHcjk8MtK=s16383",
      "map_url" => "",
      "location_id" => "13"
  ]);

}