<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/hotels', function (Request $request) {
    return array(
        'hotels' => [
            [
                "Hotel Name" => "Four Seasons, Park Lane",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/25/bdfd747c70ea3fe549e2ec8c001e9802.jpeg",
                "City" => "London",
                "Address" => "Four Seasons Hotel London at Park Lane, Mayfair, London W1J, UK",
                "Description" => "Surronded by greenery in the heart of Mayfair,the luxurious and redesigned Four Seasons Hotel London at Park Lane is unique in London, yet still true to the city. Four Seasons Hotel London at Park Lane’s chic design, high-style dining, skilled concierge team and glass-walled rooftop spa and lounge offer travellers to London the highest degree of efficiency and modern sophistication at this London luxury hotel on Park Lane. The Fitness Centre at luxury Four Seasons Hotel London at Park Lane features state-of-the-art cardio and weight-training equipment. Located on the 10th floor, it will inspire your workout with southeast views of Big Ben, the Houses of Parliament and the London Eye. Amaranto is a single London fine dining destination with three different areas – restaurant, bar and lounge – serving an Italian-inspired menu with international flavours throughout the day.",
                "Stars" => 3,
                "Latitude" => 51.50396,
                "Longitude" => -0.14937
            ],
            [
                "Hotel Name" => "The Peninsula Paris",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/26/61ee616ead006cc709c1a12cdb27c04f.jpeg",
                "City" => "Paris",
                "Address" => "The Peninsula Paris, 75116 Paris, France",
                "Description" => "Perfectly situated on Avenue Kleber, The Peninsula resides in the heart of Paris within walking distance of the city’s most famous monuments, museums and luxury shopping districts. Located in a late 19th century Haussmanian building, the hotel has been meticulously restored and discreetly modernised enabling guests to experience the ultimate in 21st century style and convenience.",
                "Stars" => 5,
                "Latitude" => 48.87106,
                "Longitude" => 2.293354
            ],
            [
                "Hotel Name" => "W Barcelona",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/28/412d7bbc12b840a6580328363d81110f.jpeg",
                "City" => "Barcelona",
                "Address" => "Carrer de la Canuda, 47, 08002 Barcelona, Spain",
                "Description" => "Step inside. See for yourself. Designed by world-renowned architect Ricardo Bofill, W Barcelona sets the scene for a spectacular stay. Located on the beachfront along the famous Barceloneta boardwalk. Check into one of our 473 fabulous guestrooms & suites boasting panoramic views over the Mediterranean and city of Barcelona. Mix it up and dine in style at chef Carlos Abellán’s BRAVO24. Get glamorous on our 26th-floor hotspot, at ECLIPSE rooftop bar, or make your way down to our signature Living Room to find WAVE & the W LOUNGE for a cocktail (or two).",
                "Stars" => 5,
                "Latitude" => 41.385064,
                "Longitude" => 2.173403
            ],
            [
                "Hotel Name" => "The Norman Tel Aviv",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/30/jd7oDHBx3EzVKIu8QN27eX41BVwl0IRDaMfKhHzw.jpeg",
                "City" => "Tel Aviv",
                "Address" => "Arlozorov St 83, Tel Aviv-Yafo, Israel",
                "Description" => "A BOUTIQUE HOTEL THAT REDEFINES LUXURY IN TEL AVIV. Welcome to an unforgettable experience in the heart of vibrant Tel Aviv. The Norman Tel Aviv is a fusion of 1920s elegance and exceptional service, housed in two historic buildings, superbly restored to their unique architectural splendor. At The Norman, you can enjoy the ultimate personalised boutique hotel experience with exclusive luxury services and facilities, including a rooftop pool, fitness room, wellness area and world-class fine dining restaurants.",
                "Stars" => 5,
                "Latitude" => 32.0853,
                "Longitude" => 34.781768
            ],
            [
                "Hotel Name" => "Conservatorium",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/31/1dd7e29bb8a965bac9272f749f6e8a67.jpeg",
                "City" => "Amsterdam",
                "Address" => "Van Baerlestraat 27, 1071 AN Amsterdam, Netherlands",
                "Description" => "The Conservatorium Hotel is Amsterdam’s leading luxury lifestyle palace, evoking glamour and elegance for sophisticated, design-literate travellers. Located in Museum Square, the luxury centre and cultural heart of the city, the Conservatorium is an architectural masterpiece that combines a landmark heritage building with a graceful, contemporary design, offering guests a selection of restaurants, a bar, lounge and the 1,000 sqm Akasha Holistic Wellbeing Facility. A destination hotel with a real sense of place, the Conservatorium is known at home and abroad as ‘Amsterdam’s Living Room’.",
                "Stars" => 5,
                "Latitude" => 52.358631,
                "Longitude" => 4.878624
            ],
            [
                "Hotel Name" => "Park Hyatt Vendome",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/32/b0c57870b303b0a06c8cc276a869c93e.jpeg",
                "City" => "Paris",
                "Address" => "5 Rue de la Paix, 75002 Paris, France",
                "Description" => "Experience the City of Lights from its central heart at Park Hyatt Paris-Vendome– one of the most luxurious 5 star hotels in Paris. Our coveted location brings the city to your doorstep, overlooking the fashionable Rue de la Paix and within walking distance of Place Vendome and Opera Garnier. Enjoy evening strolls along the Avenue des Champs-Elysees, browse exhibits at the Louvre Museum and Musee d'Orsay, or spend an afternoon on the Rue du Faubourg Saint Honore, renowned for its haute couture and trendy shops.",
                "Stars" => 5,
                "Latitude" => 48.868911,
                "Longitude" => 2.330185
            ],
            [
                "Hotel Name" => "The Carlyle, A Rosewood Hotel",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/33/cIe7xWwsu0z7ZGWmJqPrJzpABOajAfV9tHC0vC1l.jpeg",
                "City" => "New York",
                "Address" => "1411 2nd Ave, New York, NY 10021, USA",
                "Description" => "The Carlyle, A Rosewood Hotel is a timeless classic. This New York luxury hotel showcases refined taste and creates a true Manhattan experience for sophisticated travelers. Built in 1930, The Carlyle is a New York City luxury hotel that exudes charm and elegance. For generations, it has been the “home away from home” for world leaders, celebrities and sophisticated travelers. Guests discover remarkable privacy, luxury and impeccable service from this award-winning property.  With 190 lavish rooms and suites, The Carlyle offers the exclusive ambiance of an Upper East Side pied-a-terre. Exquisitely decorated by legendary designers such as Dorothy Draper, Mark Hampton, Alexandra Champalimaud and Thierry Despont, our luxury New York accommodations are a wonderful example of elegance and comfort.",
                "Stars" => 4,
                "Latitude" => 40.78468,
                "Longitude" => -73.96395
            ],
            [
                "Hotel Name" => "The Dominick",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/34/be01dbd46dcddfd415f93e12351d63f1.jpeg",
                "City" => "New York",
                "Address" => "246 Spring St, New York",
                "Description" => "If success hasn't spoiled you, we will. You should expect nothing less from a luxury hotel in lower Manhattan, situated where SoHo meets Tribeca and the West Village. Where celebrated art galleries, restaurants, boutique shopping and nightlife provide guests a true sense of place. Soaring above it all is the Trump SoHo New York, 46-stories and 391 rooms worth of fresh perspective. Inspired by the cobblestone streets and the history of the neighborhood, the intimate yet dramatic two-story lobby combines rich and natural design elements that offer contrast reflecting SoHo's environs.",
                "Stars" => 5,
                "Latitude" => 40.725365,
                "Longitude" => -74.005416
            ],
            [
                "Hotel Name" => "The St Regis Bal Harbour",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/36/538efe36c1b18d90cbfb9564744ad784.jpeg",
                "City" => "Miami",
                "Address" => "133 Camden Dr, Bal Harbour, FL 33154, USA",
                "Description" => "The St. Regis Bal Harbour Resort, Miami Beach, awarded the coveted Forbes five-star and AAA five-diamond awards for 2015, is a peerless haven of oceanfront elegance, quiet unwavering taste, anticipatory service and seductive amenities. This exclusive Miami Beach enclave is directly across from the celebrated Bal Harbour Shops mere minutes from the whirlwind energy of South Beach, Miami, and the area's premier events such as the world-renowned Art Basel. Wake in the morning as the gentle breeze of the Atlantic invites you to start your day. Rejuvenate at Remede Spa, with our Wellness Program, or simply stroll along the beach as the ocean caresses the sand. Indulge in gastro-pleasing delights by Jean-Georges at J&G Grill.",
                "Stars" => 5,
                "Latitude" => 25.891761,
                "Longitude" => -80.12699
            ],
            [
                "Hotel Name" => "Upper House",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/39/7f9ba2554373357afd88422eda927b41.jpeg",
                "City" => "Hong Kong",
                "Address" => "One Pacific Place, 88 Queensway, Central, Hong Kong",
                "Description" => "Located in Hong Kong, The Upper House was designed by architect Andre Fu. A calming contemporary hotel, The Upper House is a haven within the city. The hotel’s 117 studios and suites are surprisingly spacious, featuring natural materials and gorgeous bathrooms. Enjoy thrilling views from Level 49 at Café Gray Deluxe.",
                "Stars" => 5,
                "Latitude" => 22.277714,
                "Longitude" => 114.165435
            ],
            [
                "Hotel Name" => "Hotel de Paris St Tropez",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/40/IG3wajWc5ZSqd649Ultc41ara2OYUwX04XIPCmDZ.jpeg",
                "City" => "St Tropez",
                "Address" => "1 Traverse de la Gendarmerie, 83990 Saint-Tropez, France",
                "Description" => "This ultra-chic hotel in the village center is a 5-minute walk from Port de Saint-Tropez, an 11 minute walk from Plage de la Bouillabaisse beach and 8.3 km from Gassin Golf Country Club. Contemporary rooms and suites have free WiFi and flat-screen 3D TVs, plus high-end linens, minibars and mosaic-tiled bathrooms with rainfall showerheads. Some add balconies with garden or sea views. An upgraded 2-level suite adds a sea-view terrace with a Jacuzzi. There are 2 refined restaurants and 3 chic bars, and a transparent rooftop pool suspended over the atrium. Other amenities include a fitness room, a day spa, a sauna and a Turkish bath.",
                "Stars" => 5,
                "Latitude" => 43.269837,
                "Longitude" => 6.635574
            ],
            [
                "Hotel Name" => "The Clift Royal Sonesta",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/41/k6jNLCiKU8e49bqfsHt4N5j0NQKFWvQnLBo3DACS.jpeg",
                "City" => "San Francisco",
                "Address" => "495 Geary St, San Francisco, CA 94102, USA",
                "Description" => "Inspired by the classic luxury hotels of the early 20th century, The Clift Royal Sonesta Hotel San Francisco exudes modern elegance and refined touches at every turn. With a decidedly artful and local décor, the inspirational hotel was beautifully renovated by famed interior designer Philippe Starck and boasts a stunning furniture collection including chairs from Ray and Charles Eames, furniture by Salvador Dalí, and a surreal stool inspired by René Magritte and designed by Roberto Matta. The artistic sensibility resonates, too, in the creative menus of the legendary Redwood Room, also a Starck creation, the multi-purpose Velvet Room, and the English-club-style Living Room - all intimate places to dine, relax, visit and linger over a cocktail. Centrally located in Union Square and near the Financial District, The Clift Royal Sonesta Hotel San Francisco is convenient to Fisherman’s Wharf, the Embarcadero, Nob Hill, the Moscone Convention Center, Telegraph Hill, Coit Tower and Chinatown. Our welcoming and polished associates are eager for you to fully experience the City by the Bay that they know and love.",
                "Stars" => 3,
                "Latitude" => 37.78684,
                "Longitude" => -122.41105
            ],
            [
                "Hotel Name" => "Hermitage Hotel",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/42/nCNZE5VEHUbtDCzYI30p5i52vC0YVjqEo3g1BkDM.jpeg",
                "City" => "Monte Carlo",
                "Address" => "Avenue des Beaux-Arts, 98000 Monaco",
                "Description" => "In a palace listed as a historic monument, this luxurious hotel with a Belle-Epoque decor is 199 m from Monte-Carlo Casino. It features an atrium and guests can access the 71,050 ft sqare spa. A minibar, flat-screen TV and antique furnishings are featured in the individually decorated and air-conditioned rooms at Hotel Hermitage. Each room has a view of the city, garden or the sea. A DVD player and video games are available upon request. Vintage wines are served in the CrystalBar, with its leather armchairs. Savor gourmet cuisine in the Vistamar restaurant, which has a terrace offering harbor views, and enjoy freshly made pastries in the Limun Bar. Nice Airport is a 30-minute drive from the hotel and a helicopter service is possible upon request. Free shuttles are provided for access to the private beach. Hotel offers 280 rooms.",
                "Stars" => 5,
                "Latitude" => 43.738788,
                "Longitude" => 7.426134
            ],
            [
                "Hotel Name" => "Ritz Carlton",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/45/28b817d5dc500d72f6d5cd318e57be48.png",
                "City" => "Grand Cayman",
                "Address" => "W Bay Rd, Cayman Islands",
                "Description" => "Discover The Ritz-Carlton, Grand Cayman, with views of the world famous Seen Mile Beach. Our Cayman Islands hotel offers a natural serenity unlike anywhere on Earth, yet has the unique ability to enthrall those seeking a wide array of activities. Discover an unmatched collection of luxurious amenities at one of the Cayman Islands' top luxury resorts. From the soft sands of Seven Mile Beach to the luxury oasis of la prairie spa, our luxury resort’s surroundings are a delightful revelation of wonder.",
                "Stars" => 5,
                "Latitude" => 19.344289,
                "Longitude" => -81.381035
            ],
            [
                "Hotel Name" => "Four Seasons Cairo",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/46/4fc9131c0a5e8a57790da4596f490898.png",
                "City" => "Cairo",
                "Address" => "Al Malik Al Saleh Tunnel, Al Kafour, Misr Al Qadimah, Cairo Governorate, Egypt",
                "Description" => "Rising above the Nile at the heart of Cairo’s social scene, Four Seasons Hotel Cairo at Nile Plaza is a beacon of honest and passionate Egyptian hospitality in a modern, dynamic, culturally rich city that stimulates the senses and impresses upon the soul. Unforgettable. Discover 30 stories of dining, entertainment, and Egyptian - and art deco-influenced decor at our luxury hotel in Cairo. Situated on the legendary Corniche along the Nile River, Four Seasons Hotel Cairo at Nile Plaza is a place to treat yourself, break free from routine and discover the best of the city.",
                "Stars" => 5,
                "Latitude" => 30.015956,
                "Longitude" => 31.233974
            ],
            [
                "Hotel Name" => "La Réserve de Beaulieu & Spa",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/47/af8373c550e34c907f3498e234e9ea64.png",
                "City" => "Beaulieu-sur-Mer",
                "Address" => "5 boulevard du Marechal Leclerc, Beaulieu-sur-mer",
                "Description" => "",
                "Stars" => 5,
                "Latitude" => 43.705545,
                "Longitude" => 7.335408
            ],
            [
                "Hotel Name" => "Le K2 Altitude",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/49/35d2f621d90ac5cd526d0b4f785ee7d6.png",
                "City" => "Courchevel",
                "Address" => "Rue de l'Altiport, 73120 Saint-Bon-Tarentaise, France",
                "Description" => "",
                "Stars" => 5,
                "Latitude" => 45.40062,
                "Longitude" => 6.636481
            ],
            [
                "Hotel Name" => "Ekies All Senses Resort",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/54/7c78dfaff6a91c0491d000177eb20a8a.png",
                "City" => "Halkidiki",
                "Address" => "Unnamed Road, Vourvourou 630 78, Greece",
                "Description" => "Historically one of Europe's oldest and most multi-ethnic cities, Thessaloniki is the second largest city in the country. It is a modern, bustling hub that has been dubbed by the New York Times as Greece's cultural capital. If you've got time to spare, Thessaloniki is well worth a visit on your way back. Sitting comfortably on an unspoiled beach in Vourvourou Bay in Sithonia (one of three peninsulas of Halkidiki), Ekies All Senses Resort is surrounded by rocky islands, caves, crystal waters, sandy beaches, and pine tree forests. If you want to experience nature in all its magnificent forms, you have found your ideal destination!",
                "Stars" => 4,
                "Latitude" => 40.185508,
                "Longitude" => 23.796977
            ],
            [
                "Hotel Name" => "Ananda",
                "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/55/9f07072c36fea892d076371853fccd73.png",
                "City" => "Narendranagar",
                "Address" => "The Palace Estate, Narendra Nagar",
                "Description" => "Ananda is an award-winning luxury destination spa resort in India situated at the Himalayan foothills in Northern India. Located on a 100 acre Maharaja’s Palace Estate, Ananda is surrounded by graceful Sal forests and overlooks the spiritual town of Rishikesh and the Ganges river valley. Ananda, one of the best luxury ayurvedic retreats in India, integrates traditional Ayurveda, Yoga and Vedanta with international wellness experiences, fitness and healthy organic cuisine to restore balance and harmonize energy.",
                "Stars" => 5,
                "Latitude" => 30.159975,
                "Longitude" => 78.290324
            ]
        ],
    );
});

Route::get('/hotels/{id}', function ($id) {
    
    $filteredHotelss =  array_filter(array(
        [
            "id" => 0,
            "Hotel Name" => "Four Seasons, Park Lane",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/25/bdfd747c70ea3fe549e2ec8c001e9802.jpeg",
            "City" => "London",
            "Address" => "Four Seasons Hotel London at Park Lane, Mayfair, London W1J, UK",
            "Description" => "Surronded by greenery in the heart of Mayfair,the luxurious and redesigned Four Seasons Hotel London at Park Lane is unique in London, yet still true to the city. Four Seasons Hotel London at Park Lane’s chic design, high-style dining, skilled concierge team and glass-walled rooftop spa and lounge offer travellers to London the highest degree of efficiency and modern sophistication at this London luxury hotel on Park Lane. The Fitness Centre at luxury Four Seasons Hotel London at Park Lane features state-of-the-art cardio and weight-training equipment. Located on the 10th floor, it will inspire your workout with southeast views of Big Ben, the Houses of Parliament and the London Eye. Amaranto is a single London fine dining destination with three different areas – restaurant, bar and lounge – serving an Italian-inspired menu with international flavours throughout the day.",
            "Stars" => 3,
            "Latitude" => 51.50396,
            "Longitude" => -0.14937
        ],
        [
            "id" => 1,
            "Hotel Name" => "The Peninsula Paris",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/26/61ee616ead006cc709c1a12cdb27c04f.jpeg",
            "City" => "Paris",
            "Address" => "The Peninsula Paris, 75116 Paris, France",
            "Description" => "Perfectly situated on Avenue Kleber, The Peninsula resides in the heart of Paris within walking distance of the city’s most famous monuments, museums and luxury shopping districts. Located in a late 19th century Haussmanian building, the hotel has been meticulously restored and discreetly modernised enabling guests to experience the ultimate in 21st century style and convenience.",
            "Stars" => 5,
            "Latitude" => 48.87106,
            "Longitude" => 2.293354
        ],
        [
            "id" => 2,
            "Hotel Name" => "W Barcelona",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/28/412d7bbc12b840a6580328363d81110f.jpeg",
            "City" => "Barcelona",
            "Address" => "Carrer de la Canuda, 47, 08002 Barcelona, Spain",
            "Description" => "Step inside. See for yourself. Designed by world-renowned architect Ricardo Bofill, W Barcelona sets the scene for a spectacular stay. Located on the beachfront along the famous Barceloneta boardwalk. Check into one of our 473 fabulous guestrooms & suites boasting panoramic views over the Mediterranean and city of Barcelona. Mix it up and dine in style at chef Carlos Abellán’s BRAVO24. Get glamorous on our 26th-floor hotspot, at ECLIPSE rooftop bar, or make your way down to our signature Living Room to find WAVE & the W LOUNGE for a cocktail (or two).",
            "Stars" => 5,
            "Latitude" => 41.385064,
            "Longitude" => 2.173403
        ],
        [
            "id" => 3,
            "Hotel Name" => "The Norman Tel Aviv",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/30/jd7oDHBx3EzVKIu8QN27eX41BVwl0IRDaMfKhHzw.jpeg",
            "City" => "Tel Aviv",
            "Address" => "Arlozorov St 83, Tel Aviv-Yafo, Israel",
            "Description" => "A BOUTIQUE HOTEL THAT REDEFINES LUXURY IN TEL AVIV. Welcome to an unforgettable experience in the heart of vibrant Tel Aviv. The Norman Tel Aviv is a fusion of 1920s elegance and exceptional service, housed in two historic buildings, superbly restored to their unique architectural splendor. At The Norman, you can enjoy the ultimate personalised boutique hotel experience with exclusive luxury services and facilities, including a rooftop pool, fitness room, wellness area and world-class fine dining restaurants.",
            "Stars" => 5,
            "Latitude" => 32.0853,
            "Longitude" => 34.781768
        ],
        [
            "id" => 4,
            "Hotel Name" => "Conservatorium",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/31/1dd7e29bb8a965bac9272f749f6e8a67.jpeg",
            "City" => "Amsterdam",
            "Address" => "Van Baerlestraat 27, 1071 AN Amsterdam, Netherlands",
            "Description" => "The Conservatorium Hotel is Amsterdam’s leading luxury lifestyle palace, evoking glamour and elegance for sophisticated, design-literate travellers. Located in Museum Square, the luxury centre and cultural heart of the city, the Conservatorium is an architectural masterpiece that combines a landmark heritage building with a graceful, contemporary design, offering guests a selection of restaurants, a bar, lounge and the 1,000 sqm Akasha Holistic Wellbeing Facility. A destination hotel with a real sense of place, the Conservatorium is known at home and abroad as ‘Amsterdam’s Living Room’.",
            "Stars" => 5,
            "Latitude" => 52.358631,
            "Longitude" => 4.878624
        ],
        [
            "id" => 5,
            "Hotel Name" => "Park Hyatt Vendome",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/32/b0c57870b303b0a06c8cc276a869c93e.jpeg",
            "City" => "Paris",
            "Address" => "5 Rue de la Paix, 75002 Paris, France",
            "Description" => "Experience the City of Lights from its central heart at Park Hyatt Paris-Vendome– one of the most luxurious 5 star hotels in Paris. Our coveted location brings the city to your doorstep, overlooking the fashionable Rue de la Paix and within walking distance of Place Vendome and Opera Garnier. Enjoy evening strolls along the Avenue des Champs-Elysees, browse exhibits at the Louvre Museum and Musee d'Orsay, or spend an afternoon on the Rue du Faubourg Saint Honore, renowned for its haute couture and trendy shops.",
            "Stars" => 5,
            "Latitude" => 48.868911,
            "Longitude" => 2.330185
        ],
        [
            "id" => 6,
            "Hotel Name" => "The Carlyle, A Rosewood Hotel",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/33/cIe7xWwsu0z7ZGWmJqPrJzpABOajAfV9tHC0vC1l.jpeg",
            "City" => "New York",
            "Address" => "1411 2nd Ave, New York, NY 10021, USA",
            "Description" => "The Carlyle, A Rosewood Hotel is a timeless classic. This New York luxury hotel showcases refined taste and creates a true Manhattan experience for sophisticated travelers. Built in 1930, The Carlyle is a New York City luxury hotel that exudes charm and elegance. For generations, it has been the “home away from home” for world leaders, celebrities and sophisticated travelers. Guests discover remarkable privacy, luxury and impeccable service from this award-winning property.  With 190 lavish rooms and suites, The Carlyle offers the exclusive ambiance of an Upper East Side pied-a-terre. Exquisitely decorated by legendary designers such as Dorothy Draper, Mark Hampton, Alexandra Champalimaud and Thierry Despont, our luxury New York accommodations are a wonderful example of elegance and comfort.",
            "Stars" => 4,
            "Latitude" => 40.78468,
            "Longitude" => -73.96395
        ],
        [
            "id" => 7,
            "Hotel Name" => "The Dominick",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/34/be01dbd46dcddfd415f93e12351d63f1.jpeg",
            "City" => "New York",
            "Address" => "246 Spring St, New York",
            "Description" => "If success hasn't spoiled you, we will. You should expect nothing less from a luxury hotel in lower Manhattan, situated where SoHo meets Tribeca and the West Village. Where celebrated art galleries, restaurants, boutique shopping and nightlife provide guests a true sense of place. Soaring above it all is the Trump SoHo New York, 46-stories and 391 rooms worth of fresh perspective. Inspired by the cobblestone streets and the history of the neighborhood, the intimate yet dramatic two-story lobby combines rich and natural design elements that offer contrast reflecting SoHo's environs.",
            "Stars" => 5,
            "Latitude" => 40.725365,
            "Longitude" => -74.005416
        ],
        [   
            "id" => 8,
            "Hotel Name" => "The St Regis Bal Harbour",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/36/538efe36c1b18d90cbfb9564744ad784.jpeg",
            "City" => "Miami",
            "Address" => "133 Camden Dr, Bal Harbour, FL 33154, USA",
            "Description" => "The St. Regis Bal Harbour Resort, Miami Beach, awarded the coveted Forbes five-star and AAA five-diamond awards for 2015, is a peerless haven of oceanfront elegance, quiet unwavering taste, anticipatory service and seductive amenities. This exclusive Miami Beach enclave is directly across from the celebrated Bal Harbour Shops mere minutes from the whirlwind energy of South Beach, Miami, and the area's premier events such as the world-renowned Art Basel. Wake in the morning as the gentle breeze of the Atlantic invites you to start your day. Rejuvenate at Remede Spa, with our Wellness Program, or simply stroll along the beach as the ocean caresses the sand. Indulge in gastro-pleasing delights by Jean-Georges at J&G Grill.",
            "Stars" => 5,
            "Latitude" => 25.891761,
            "Longitude" => -80.12699
        ],
        [
            "id" => 9,
            "Hotel Name" => "Upper House",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/39/7f9ba2554373357afd88422eda927b41.jpeg",
            "City" => "Hong Kong",
            "Address" => "One Pacific Place, 88 Queensway, Central, Hong Kong",
            "Description" => "Located in Hong Kong, The Upper House was designed by architect Andre Fu. A calming contemporary hotel, The Upper House is a haven within the city. The hotel’s 117 studios and suites are surprisingly spacious, featuring natural materials and gorgeous bathrooms. Enjoy thrilling views from Level 49 at Café Gray Deluxe.",
            "Stars" => 5,
            "Latitude" => 22.277714,
            "Longitude" => 114.165435
        ],
        [
            "id" => 10,
            "Hotel Name" => "Hotel de Paris St Tropez",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/40/IG3wajWc5ZSqd649Ultc41ara2OYUwX04XIPCmDZ.jpeg",
            "City" => "St Tropez",
            "Address" => "1 Traverse de la Gendarmerie, 83990 Saint-Tropez, France",
            "Description" => "This ultra-chic hotel in the village center is a 5-minute walk from Port de Saint-Tropez, an 11 minute walk from Plage de la Bouillabaisse beach and 8.3 km from Gassin Golf Country Club. Contemporary rooms and suites have free WiFi and flat-screen 3D TVs, plus high-end linens, minibars and mosaic-tiled bathrooms with rainfall showerheads. Some add balconies with garden or sea views. An upgraded 2-level suite adds a sea-view terrace with a Jacuzzi. There are 2 refined restaurants and 3 chic bars, and a transparent rooftop pool suspended over the atrium. Other amenities include a fitness room, a day spa, a sauna and a Turkish bath.",
            "Stars" => 5,
            "Latitude" => 43.269837,
            "Longitude" => 6.635574
        ],
        [
            "id" => 11,
            "Hotel Name" => "The Clift Royal Sonesta",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/41/k6jNLCiKU8e49bqfsHt4N5j0NQKFWvQnLBo3DACS.jpeg",
            "City" => "San Francisco",
            "Address" => "495 Geary St, San Francisco, CA 94102, USA",
            "Description" => "Inspired by the classic luxury hotels of the early 20th century, The Clift Royal Sonesta Hotel San Francisco exudes modern elegance and refined touches at every turn. With a decidedly artful and local décor, the inspirational hotel was beautifully renovated by famed interior designer Philippe Starck and boasts a stunning furniture collection including chairs from Ray and Charles Eames, furniture by Salvador Dalí, and a surreal stool inspired by René Magritte and designed by Roberto Matta. The artistic sensibility resonates, too, in the creative menus of the legendary Redwood Room, also a Starck creation, the multi-purpose Velvet Room, and the English-club-style Living Room - all intimate places to dine, relax, visit and linger over a cocktail. Centrally located in Union Square and near the Financial District, The Clift Royal Sonesta Hotel San Francisco is convenient to Fisherman’s Wharf, the Embarcadero, Nob Hill, the Moscone Convention Center, Telegraph Hill, Coit Tower and Chinatown. Our welcoming and polished associates are eager for you to fully experience the City by the Bay that they know and love.",
            "Stars" => 3,
            "Latitude" => 37.78684,
            "Longitude" => -122.41105
        ],
        [
            "id" => 12,
            "Hotel Name" => "Hermitage Hotel",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/42/nCNZE5VEHUbtDCzYI30p5i52vC0YVjqEo3g1BkDM.jpeg",
            "City" => "Monte Carlo",
            "Address" => "Avenue des Beaux-Arts, 98000 Monaco",
            "Description" => "In a palace listed as a historic monument, this luxurious hotel with a Belle-Epoque decor is 199 m from Monte-Carlo Casino. It features an atrium and guests can access the 71,050 ft sqare spa. A minibar, flat-screen TV and antique furnishings are featured in the individually decorated and air-conditioned rooms at Hotel Hermitage. Each room has a view of the city, garden or the sea. A DVD player and video games are available upon request. Vintage wines are served in the CrystalBar, with its leather armchairs. Savor gourmet cuisine in the Vistamar restaurant, which has a terrace offering harbor views, and enjoy freshly made pastries in the Limun Bar. Nice Airport is a 30-minute drive from the hotel and a helicopter service is possible upon request. Free shuttles are provided for access to the private beach. Hotel offers 280 rooms.",
            "Stars" => 5,
            "Latitude" => 43.738788,
            "Longitude" => 7.426134
        ],
        [
            "id" => 13,
            "Hotel Name" => "Ritz Carlton",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/45/28b817d5dc500d72f6d5cd318e57be48.png",
            "City" => "Grand Cayman",
            "Address" => "W Bay Rd, Cayman Islands",
            "Description" => "Discover The Ritz-Carlton, Grand Cayman, with views of the world famous Seen Mile Beach. Our Cayman Islands hotel offers a natural serenity unlike anywhere on Earth, yet has the unique ability to enthrall those seeking a wide array of activities. Discover an unmatched collection of luxurious amenities at one of the Cayman Islands' top luxury resorts. From the soft sands of Seven Mile Beach to the luxury oasis of la prairie spa, our luxury resort’s surroundings are a delightful revelation of wonder.",
            "Stars" => 5,
            "Latitude" => 19.344289,
            "Longitude" => -81.381035
        ],
        [
            "id" => 14,
            "Hotel Name" => "Four Seasons Cairo",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/46/4fc9131c0a5e8a57790da4596f490898.png",
            "City" => "Cairo",
            "Address" => "Al Malik Al Saleh Tunnel, Al Kafour, Misr Al Qadimah, Cairo Governorate, Egypt",
            "Description" => "Rising above the Nile at the heart of Cairo’s social scene, Four Seasons Hotel Cairo at Nile Plaza is a beacon of honest and passionate Egyptian hospitality in a modern, dynamic, culturally rich city that stimulates the senses and impresses upon the soul. Unforgettable. Discover 30 stories of dining, entertainment, and Egyptian - and art deco-influenced decor at our luxury hotel in Cairo. Situated on the legendary Corniche along the Nile River, Four Seasons Hotel Cairo at Nile Plaza is a place to treat yourself, break free from routine and discover the best of the city.",
            "Stars" => 5,
            "Latitude" => 30.015956,
            "Longitude" => 31.233974
        ],
        [
            "id" => 15,
            "Hotel Name" => "La Réserve de Beaulieu & Spa",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/47/af8373c550e34c907f3498e234e9ea64.png",
            "City" => "Beaulieu-sur-Mer",
            "Address" => "5 boulevard du Marechal Leclerc, Beaulieu-sur-mer",
            "Description" => "",
            "Stars" => 5,
            "Latitude" => 43.705545,
            "Longitude" => 7.335408
        ],
        [
            "id" => 16,
            "Hotel Name" => "Le K2 Altitude",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/49/35d2f621d90ac5cd526d0b4f785ee7d6.png",
            "City" => "Courchevel",
            "Address" => "Rue de l'Altiport, 73120 Saint-Bon-Tarentaise, France",
            "Description" => "",
            "Stars" => 5,
            "Latitude" => 45.40062,
            "Longitude" => 6.636481
        ],
        [
            "id" => 17,
            "Hotel Name" => "Ekies All Senses Resort",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/54/7c78dfaff6a91c0491d000177eb20a8a.png",
            "City" => "Halkidiki",
            "Address" => "Unnamed Road, Vourvourou 630 78, Greece",
            "Description" => "Historically one of Europe's oldest and most multi-ethnic cities, Thessaloniki is the second largest city in the country. It is a modern, bustling hub that has been dubbed by the New York Times as Greece's cultural capital. If you've got time to spare, Thessaloniki is well worth a visit on your way back. Sitting comfortably on an unspoiled beach in Vourvourou Bay in Sithonia (one of three peninsulas of Halkidiki), Ekies All Senses Resort is surrounded by rocky islands, caves, crystal waters, sandy beaches, and pine tree forests. If you want to experience nature in all its magnificent forms, you have found your ideal destination!",
            "Stars" => 4,
            "Latitude" => 40.185508,
            "Longitude" => 23.796977
        ],
        [
            "id" => 18,
            "Hotel Name" => "Ananda",
            "Image" => "https://d13bre0qp8legl.cloudfront.net/hotels/55/9f07072c36fea892d076371853fccd73.png",
            "City" => "Narendranagar",
            "Address" => "The Palace Estate, Narendra Nagar",
            "Description" => "Ananda is an award-winning luxury destination spa resort in India situated at the Himalayan foothills in Northern India. Located on a 100 acre Maharaja’s Palace Estate, Ananda is surrounded by graceful Sal forests and overlooks the spiritual town of Rishikesh and the Ganges river valley. Ananda, one of the best luxury ayurvedic retreats in India, integrates traditional Ayurveda, Yoga and Vedanta with international wellness experiences, fitness and healthy organic cuisine to restore balance and harmonize energy.",
            "Stars" => 5,
            "Latitude" => 30.159975,
            "Longitude" => 78.290324
        ],
    ), function ($hotel) use ($id) {
        return $hotel["id"] == $id;
    });

    return json_encode(array_values($filteredHotelss));
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
