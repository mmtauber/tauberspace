<?php
	ob_start();
?>

<p class="article-header">Motorbikes and You, or, How to not Die</p>
<p class="article-subtitle">Friday, June 3rd 2011, Hoi An, Vietnam</p>

<p>So far Vietnam has turned out to be an excellent first choice for backpacking.  The food is cheap and most of the time delicious.
Additionally, no sign of sickness from bad water or food has surfaced. On the whole the entire experience so far has been great. </p>

<p>Arriving in Saigon you are greeted with a legion of motorbikes. These things are everywhere and operate live a hive of wasps.
Traffic lights are a suggestion and waiting until the path is clear is not an option. To cross a street you blindly walk from the sidewalk
into the swarm armed only with faith that nothing will destroy you in the first milliseconds. Among all these motorbikes, however, the car is king
but the tour bus is its cybernetically enhanced man-beast father. The horn is the absolute most important tool to a Vietnamese motorist. It is
used like sonor from a submarine, but far more often. It is literally the only instrument that makes driving possible.
If you ever feel like life has gotten stale or boring, just cross a street in Vietnam. </p>

<p>The people here also take some getting used to. Very often the Vietnamese are quite friendly. Until you want to buy something. Prices can make 
huge swings depending on where you go, so having some extra time to shop around always pays off. Once they see a westerner they up their prices
to get as much money as they can off of you. In the grand scheme of things this is normally a difference of a couple of cents. Not much for us,
but a great amount of cash to the locals.</p>

<p>After being in Saigon for a couple nights I made my way to Mui Ne: A quiet beach-side town with amazing an shoreline. On the bus ride over I met
a couple from England. The cool thing about this is so many people are traveling from south Vietnam to the north that you will more than likely run into
these same people a week down the road. This is one of the great things about traveling.</p>

<p>In Mui Ne I got a nice burn on my shoulderblade from skidding down a sanddune hill. It smarts pretty bad, but I came prepared with medical supplies.
After a few nights in one hotel I moved into one that was literally "On the Beach". For five dollars a night you can't be wrong. </p>

<p>Finally, that brings us up to date in Hoi An and I must say: Damn cool town. Nightlife is almost nonexistant, but there's always a way to find something.
This town is known for it's tailors. On that note, I went ahead and bought a custom tailored kashmir suit, because, why not? I've never owned a suit before
so why not have the first be custom made, from kashmir, and dirt cheap!</p>

<?php
	$page_main_content = ob_get_contents();
	ob_end_clean();
	$page_title = 'Tauberspace.com - Homepage';
	include('master.php');
	include(DB_PATH);

?>

