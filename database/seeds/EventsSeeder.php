<?php

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Log;

class EventsSeeder extends Seeder
{
  DB::table('events')->delete();
	Event::create([
       "id" => "1",
       "location_id" =>"4",
       "title" => "Τετάρτες στη Φωκίωνος Νέγρη 16 - Ερωτισμός & Πορνογραφία",
       "date" => "2015-02-02",
       "link" => "http://www.felioscollection.gr/events/tetartes-sti-fokionos-negri-16-erotismos-pornografia"
    ]);
  	// Log::

}
