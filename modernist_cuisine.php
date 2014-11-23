<?php

class Flickr { 
	private $apiKey = 'YOUR_API_KEY_GOES_HERE'; 
 
	public function __construct() {
	} 
 
	public function search($query = null) { 
		$search = 'http://flickr.com/services/rest/?method=flickr.photos.search&api_key=' . $this->apiKey . '&text=' . urlencode($query) . '&per_page=1&format=php_serial&license=1%2C2%2C3%2C4%2C5%2C6'; 
		$result = file_get_contents($search); 
		$result = unserialize($result); 
		return $result; 
	} 
 }

print "<h1>700 Modernist Cuisine Recipes</h1>";

$i = 1;
while ($i <= 700):

    $i++;


$quotes=array("3D printed","a breast of","a bucket of","a cake of","a fusillade of","a snowdrift of","barbecued","barrel-aged","blast furnace","boiled","charred","cream of","crumbled","cryoseared","cryo-smoked","deep-fried","dehydrated","dried","evaporated","fermented","flattened","fried","grass-fed","grass-smoked","imitation","invisible","knitted","minced","mulled","pan-fried","par-boiled","powdered","preserved","roasted","salted","sliced","slow-cooked","smoked","soaked","spherified","stewed","sun-dried","sun-sintered","test tube of","the sounds of","tinned","toasted","transparent","tyre-smoked","wood-smoked","hulled","picked","creamed");

$quotes2=array("apricot nectar","artichoke","asparagus","avocado","bacon","bagel","baking powder","bamboo shoot","banana","banana","barbecue sauce","barley","barramundi","basil","bean","bean sprout","beef","beef","beef broth","beef gravy","beef heart","beef liver","beef noodle soup","beef potpie","beef roast","beef steak","beer","beet","beet green","black bean","blackberry","black-eyed pea","blue cheese","blueberry","blueberry muffin","blueberry pie","bologna","boston brown bread","bouillon","bourbon","bran muffin","braunschweiger","brazil nut","bread","bread stuffing","breadcrumb","broccoli","broccoli","brussels sprout","buckwheat flour","bulgur","butter","buttermilk","cabbage","cake","camel","camembert","cantaloup","cap'n crunch","caramel","carob flour","carp","carrot","carrot","carrot cake","cashew nut","catsup","cauliflower","caviar","celery","celery seed","cheddar","cheddar cheese","cheese cracker","cheese sauce","cheeseburger","cheesecake","cherries","cherry pie","chestnut","chicken","chicken liver","chicken noodle soup","chicken potpie","chicken rice soup","chickpea","chili con carne","chili powder","chlorophyl","chocolate","chocolate","chocolate chip cookie","chocolate milk","chop suey","cinnamon","clam","clam chowder","club soda","coconut","coffee","coffeecake","cola","collard greens","ramps","porcini","corn","corn chip","corn flake","corn grit","corn muffin","corn oil","cornmeal","cottage cheese","crabmeat","cracked-wheat bread","cranberry sauce","cream cheese","cream of wheat","creme pie","cream of wheat","croissant","cucumber","curry powder","custard","custard pie","dandelion green","danish pastry","date","devil's food cake","dormouse","doughnut","duck","egg","eggnog","eggplant","enchilada","endive","english muffin","evaporated milk","fat","feta cheese","fig","fig bar","fish sandwich","fish stick","flounder","flounder","fondant","frankfurter","french bread","french bread","french toast","fresh ham","fried pie","froot loops cereal","fruit cocktail","fruit punch drink","fruitcake","fudge","garlic powder","gelatin","gin","ginger ale","gingerbread cake","glutamate","goat","golden grahams cereal","graham cracker","grape","grape drink","grape juice","grape soda","grapefruit","grapefruit juice","grapejuice","grape-nuts cereal","gravy and turkey","ground beef","gruyere","gum drop","haddock","half and half","halibut","hamburger","hard candy","herring","hollandaise sauce","honey","honeydew melon","ice cream","ice milk","italian bread","italian salad dressing","jams and preserve","jellie","jelly bean","jerusalem-artichoke","kale","kangaroo","kiwifruit","kohlrabi","lamb","lard","lemon","lemon juice","lemon meringue pie","lemonade","lemongrass","lemon-lime soda","lentil","lettuce","light","lima bean","lime juice","limeade","lucky charms cereal","macadamia nut","macaroni","macaroni and cheese","malted milk","malt-o-meal","mango","maple syrup","margarine","marjoram","marshmallow","mayonnaise","ranch dressing","melba toast","milk","milk chocolate candy","minestrone soup","miso","mixed grain bread","molasses","mozzarella cheese","muenster cheese","mushroom","mushroom gravy","mustard","mustard green","nectarine","nonfat dry milk","oatmeal","oatmeal","oatmeal bread","ocean perch","offal","okra pod","olive","olive oil","onion","onion powder","onion ring","onion soup","orange","orange","orange juice","orange soda","oregano","ox tongue","oyster","pancake","papaya","paprika","parmesan cheese","parsley","parsnip","pea","pea","peach pie","peach","peanut","peanut","peanut butter","peanut butter cookie","peanut oil","pear","pear","pecan","pecan pie","pepper","pepper","pickle","piecrust","pine nut","pineapple","pineapple juice","pinto bean","pistachio nut","pita bread","pizza","plantain","plum","popcorn","popsicle","pork","pork chop","pork rib","pork shoulder","potato","potato chip","pound cake","pretzel","provolone cheese","prune","prune juice","pudding","pumpernickel bread","pumpkin","pumpkin and squash kernel","pumpkin pie","quiche lorraine","radish","raisin","raisin bran","raisin bread","ramen","raspberry","red kidney bean","red wine","refried bean","relish","rhubarb","rice","rice krispies cereal","ricotta cheese","roast beef sandwich","roll","root beer","root beer","rye bread","rye wafer","safflower oil","salami","salmon","salt","salt","saltine","sandwich spread","sardine","sauerkraut","scallop","seaweed","self-raising flour","semisweet chocolate","sesame seed","shake","sheetcake","sherbet","sherry","shortbread cookie","shredded wheat cereal","shrimp","snack cake","snack type cracker","snail","snap bean","sour cream","soy","soy sauce","soybean","soybean","soybean oil","soybean-cottonseed oil","spaghetti","spam","special k cereal","spinach","spinach souffle","squash","stick insect","strawberry","sugar","sugar cookie","sugar frosted flake","sunflower oil","sunflower seed","sweet chocolate","sweetbread","sweetened condensed milk","sweetpotato","swiss cheese","syrup","taco","tahini","tangerine","tangerine juice","tartar sauce","tea","toaster pastry","tofu","tomato","tomato juice","tomato paste","tomato puree","tomato sauce","tomato veg soup","tortilla","trout","truffle","tuna","tuna salad","turkey","turkey ham","turkey loaf","turkey patty","turkey roast","turnip","turnip green","vanilla wafer","veal cutlet","veal rib","vegemite","vegetable","vegetable beef soup","vegetarian soup","vienna bread","vienna sausage","vinegar","vinegar and oil salad dressing","waffle","walnut","water chestnut","watermelon","wattleseed","wheat","wheat bread","wheat flour","whipped topping","whipping cream","whisky","white bread","white bread crumb","white bread cube","white sauce","whole-wheat bread","whole-wheat flour","whole-wheat wafer","wine","wombat","yeast","yeast","yogurt");

$quotes3=array("a la king","a la mode","aberration","bacon","biscotti","biscuit","brownies","burger","burrito","cake","carpaccio","chips","cigar","cigarette","condensate","confit","credenza","crumble","crystal","cupcake","curd","cream","diamond","dirt","evaporation","explosion","fabric","fettucine","foam","fool","frills","gas","gel","glass","grass","gravy","hair","hot dog","ice cream","infusion","jacket","jus","macaron","macrame","memory","mess","muffin","nougat","laksa","noodle","noodle","palate cleanser","pasta","patty","popsicle","poptart","puree","pipe","porridge","potpourri","powder","ravioli","reduction","robot","salad","salami","salt","sausage","shards","shards","skin","slices","slider","soda","sorbet","soup","spam","steak","styrofoam","sugar","taco","tartare","tea","toxin","tree","tube","vapor","whoopie pie","wine","wire","rinds","peel");

$measures=array("grams","milligrams");

$method1=array("Blend together the","Beat together the","Slice then mix the","Barbecue then slice the","Finely slice the","Marinate the","Liquify the","Shred  the","Crush the","Mix the","Bake the","Steam the","Barbecue the","Microwave the","Grill the","Roast the","Par-boil the","Batter then fry the","Blend the","Deep fry the","Shallow fry the","Grill the","Boil the","Cube the the","Centrifuge the","Ferment the","Shave the","Heat the","Burn the","Stare at the","Think deeply about the","Talk to the","Set aside the","Ignore the", "Remember the","Mix together the","Mix the","Fry the","Pan fry the", "Broil the");

$method3=array("for 10 minutes","for 15 minutes","for 30 minutes","for 40 minutes","for 50 minutes","for one hour","for 10 minutes","for 15 minutes","for 30 minutes","for 40 minutes","for 50 minutes","for one hour","for 10 minutes","for 15 minutes","for 30 minutes","for 40 minutes","for 50 minutes","for one hour","for 10 minutes","for 15 minutes","for 30 minutes","for 40 minutes","for 50 minutes","for one hour","for 10 minutes","for 15 minutes","for 30 minutes","for 40 minutes","for 50 minutes","for one hour","for 10 minutes","for 15 minutes","for 30 minutes","for 40 minutes","for 50 minutes","for one hour","for 10 minutes","for 15 minutes","for 30 minutes","for 40 minutes","for 50 minutes","for one hour","for 10 minutes","for 15 minutes","for 30 minutes","for 40 minutes","for 50 minutes","for one hour","for 10 minutes","for 15 minutes","for 30 minutes","for 40 minutes","for 50 minutes","for one hour","for 10 minutes","for 15 minutes","for 30 minutes","for 40 minutes","for 50 minutes","for one hour","for 10 minutes","for 15 minutes","for 30 minutes","for 40 minutes","for 50 minutes","for one hour","for 10 minutes","for 15 minutes","for 30 minutes","for 40 minutes","for 50 minutes","for one hour","until translucent","until ready","until they form stiff peaks","until risen","for two days","until a thick layer of mould forms","until dawn","for two hours","until they turn into a gaseous cloud","until they gelatinise","for 20 minutes","for 5 minutes","in direct sunlight","until warm to touch","until they form a creamy consistency","until they coo like a dove","inside a vacuum flask","in an earthenware jar","in a medium pot","in a glass jar","in the emptiness of space","until you grow weak","until crisp","until crunchy","until crystaline","until effervescent","until fibrous","until firm","until fizzy","until flabby","until flaky","until foamy","until acidic","until astringent","until bitter","until bland","until burnt","until creamy","until dry","until fatty","until metallic","until old","until piquant","until pungent","until salty","until sharp","until sickly","until soggy","until sour","until appetising","until attractive","until bubbly","until cellular","until clear","until cloudy","until coarse","until colourful","until colourless","until crumbly","until dry","until fattening","until flat","until foamy","until fresh","until greasy","until grained","until healthy","until hot","until juicy","until lumpy","until moist","until mushy","until pulpy","until powdery","until slimy","until smooth","until soft","until soggy","until spongy","until springy","until sticky","until stiff","until stretchy","until stringy","until syrupy","until tacky","until tender","until thick","until thin","until spicy","until stale","until sweet","until tasteless","until tasty","until tangy","until undercooked","until moist","until mottled","until opaque","until powdery","until risen","until shaped","until shiny","until size","until slimy","until smooth","until soggy","until solid","until stringy","until syrupy","until tasty","until translucent","until thick","until watery","until lumpy","until gooey","until greasy","until gritty","until hard","until hot","until warm");

$formit=array("Form into a","Shape into a","Compile ingredients into a","Connect all parts together into a","Construct the","Contrive a","Erect the ingredients into a","Fabricate the form of a","Fashion a rough","In spite of the previous ingredients, find some pretense to make a","Force the ingredients into a mould shaped like a","Join pieces together into a","Make the","Manufacture the","Model an outline of the","Mold a","Piece together the","Produce a","Set up the equipment required to make a","Shape the","Unite all ingredients together into a","Using an arc-welder, weld together the","Mix into the shape of a ","Juggle until it forms a rough","Make the shape of a","Form the shape of the","Clear your mind of all thoughts, then envision the perfect","Build a","Find something that looks like a","Mix all together into a","Form a","Form the","Create the","In the appropriate device, extrude the","Make a","Once complete, form the","Once finished, make the","Once complete, mold the ingredients into a","Using a soldering iron, etch the ingredients with a motif of a","Mix together the ingredients until they look like a","Find some","Once done, form the ingredients into a","Once the process is complete, shape the ingredients into a","When ready, make a","Once ready, form a","Once ready, mix all the components into a","Once complete, make all ingredients into a");

$finish=array("Marinate ingredients overnight then slice","Pour into a well-greased baking tin, then bake","Coat in flour, then fry","Bake in a moderate oven","Dry in a cool, shady place","Bake in a hot oven","Bake in a warm oven","Shoot into space","Bake three hours and serve hot","Let freeze and serve in small glasses","Roll up and serve hot as possible","Baste often with butter and serve hot","Garnish with sliced lemon and parsley","Serve the goose with the whole apples","Let brown in the oven a few minutes","Fill the dish with the mixture and cover with the dough. Let bake until done and serve hot","Bake in a moderate oven until done","Serve hot with wine-sauce","Let cook ten minutes","Serve with the soup","Serve at once","Serve hot or cold","Sprinkle with fine bread-crumbs and let bake in the oven a few minutes. Serve hot","Baste often with the sauce. Serve hot, and pour over the sauce; garnish with parsley","Put the mixture in the centre; turn in the ends and serve at once","Let simmer a few minutes and serve hot","Garnish with sliced lemon and sprigs of parsley and serve cold","Put in the oven to brown. Serve with boiled fish","Let all cook until tender; then serve hot on a large platter","Let bake until done. Thicken with flour; boil up and pour over the roast.","Sprinkle with flour; add a glass of sherry and let brown. Serve with celery and currant jelly","Mix with 1 egg and form into balls; roll in flour and fry in deep hot lard until brown. Serve hot with tomato-sauce.","Sprinkle the top with bread-crumbs fried in butter until brown","Let simmer until done","Let cook a few minutes and serve hot","Fill a potato with the mixture and let bake in a moderate oven until tender and serve hot","Bake in a buttered baking-pan","Deep-fry until golden brown","Dowse in brandy and set alight","Wrap in a pudding cloth and boil for six hours","Bury in an earthenware jar for at least six months","Bury deep beneath a fire, covered in hessian bags, and bake for 12 hours","Smoke over low heat for 3 hours","Set on fire","Serve","Then let bake in the oven with 1 cup of beef broth. Baste often and serve very hot","Dredge with flour and let bake in a hot oven until nearly done","Put in a buttered pudding-dish and bake in a moderate oven until done","Lay in a well-buttered baking-tin and bake until a deep yellow","Fry until blackened","Serve hot with powdered sugar on top","Then cover with the dough and let bake until done. Serve hot","Simmer fifteen minutes. Serve hot or cold","Pour all together and let cook until meat is very tender. Serve hot","Mix together and bake","Mix together","Bring together until it forms a light dough. Bake","Bake","Fry in hot oil","Wait until something happens","Chill overnight","Serve cold, sliced very thin, garnished with watercress","Beat to a stiff froth; put in a buttered pudding-mold, and let boil until done. Serve with brandy sauce","Liquify into a soup and serve with toasted croutons","Serve with butter","Boil relentlessly");

#random the randomness

$n=count($quotes);
$num=rand(0, ($n-1));
$quote=$quotes[$num];
$text=$quote;

$n2=count($quotes2);
$num2=rand(0, ($n2-1));
$quote2=$quotes2[$num2];
$text2=$quote2;

$n4=count($quotes3);
$num4=rand(0, ($n4-1));
$quote3=$quotes3[$num4];
$text3=$quote3;

$n41=count($quotes2);
$num41=rand(0, ($n41-1));
$quote4=$quotes2[$num41];
$text4=$quote4;

$n5=count($quotes2);
$num5=rand(0, ($n5-1));
$quote5=$quotes2[$num5];
$text5=$quote5;

$n6=count($quotes2);
$num6=rand(0, ($n6-1));
$quote6=$quotes2[$num6];
$text6=$quote6;

$n7=count($quotes2);
$num7=rand(0, ($n7-1));
$quote7=$quotes2[$num7];
$text7=$quote7;

$n8=count($quotes2);
$num8=rand(0, ($n8-1));
$quote8=$quotes2[$num8];
$text8=$quote8;

$n9=count($quotes2);
$num9=rand(0, ($n9-1));
$quote9=$quotes2[$num9];
$text9=$quote9;

$n10=count($quotes3);
$num10=rand(0, ($n10-1));
$quote10=$quotes3[$num10];
$text10=$quote10;

#measures 

$n11=count($measures);
$num11=rand(0, ($n11-1));
$measure1=$measures[$num11];

$n12=count($measures);
$num12=rand(0, ($n12-1));
$measure2=$measures[$num12];

$n13=count($measures);
$num13=rand(0, ($n13-1));
$measure3=$measures[$num13];

$n14=count($measures);
$num14=rand(0, ($n14-1));
$measure4=$measures[$num14];

$n15=count($measures);
$num15=rand(0, ($n15-1));
$measure5=$measures[$num15];

$n16=count($measures);
$num16=rand(0, ($n16-1));
$measure6=$measures[$num16];

#nice round numbers

$round1=round(rand(2, 100)*10);
$round2=round(rand(2, 100)*10);
$round3=round(rand(2, 100)*10);
$round4=round(rand(2, 100)*10);
$round5=round(rand(2, 100)*10);
$round6=round(rand(2, 100)*10);

#method

$n17=count($method1);
$num17=rand(0, ($n17-1));
$methods1=$method1[$num17];

$n19=count($method3);
$num19=rand(0, ($n19-1));
$methods3=$method3[$num19];

$n20=count($method1);
$num20=rand(0, ($n20-1));
$methods4=$method1[$num20];

$n21=count($method3);
$num21=rand(0, ($n21-1));
$methods5=$method3[$num21];

$n22=count($method1);
$num22=rand(0, ($n22-1));
$methods6=$method1[$num22];

$n23=count($method3);
$num23=rand(0, ($n23-1));
$methods7=$method3[$num23];

$n24=count($finish);
$num24=rand(0, ($n24-1));
$finish1=$finish[$num24];

$n25=count($formit);
$num25=rand(0, ($n25-1));
$formit1=$formit[$num25];

$flickrsearch="";
$flickrsearch.=$text2;
$flickrsearch.=" ";
$flickrsearch.="microscope";

  
$Flickr = new Flickr; 
$data = $Flickr->search($flickrsearch); 
foreach($data['photos']['photo'] as $photo) { 
	// the image URL becomes somthing like 
	// http://farm{farm-id}.static.flickr.com/{server-id}/{id}_{secret}.jpg  
	echo '<a href="http://www.flickr.com/photos/' . $photo["owner"] . '/' . $photo["id"] . '/" target="_blank" rel="nofollow"><img align="center" border="0" src="http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg" width="600" /></a>'; 


}


print "<h1>$text";
print " ";
print "$text2 ";
print "$text3 </h1>";
print "<br /><br />";
print "<h2>Ingredients:</h2> <br />";
print "<ul><li>$round1 $measure1 of $text2</li>";
print "<li>$round2 $measure2 of $text4 </li>";
print "<li>$round3 $measure3 of $text5 </li>";
print "<li>$round4 $measure4 of $text6 </li>";
print "<li>$round5 $measure5 of $text7 </li>";
print "<li>$round6 $measure6 of $text8 </li></ul>";
print "<br /><br />";
print "<h2>Method: <br /></h2>";
print "$methods1 $text2 and $text4 $methods3. ";
print "$methods4 $text5 and $text6 $methods5. ";
print "$methods6 $text7 and $text8 $methods7. ";
print "$formit1 $text3. ";
print "$finish1. ";
print "<br />";
print "<br />";


endwhile;

?>
