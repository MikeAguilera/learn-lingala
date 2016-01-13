<?php

function get_list_view_html($product) {
    
    $output = "";

    $output = $output . "<li>";
    $output = $output . '<p>' . $product["english"] .  ' : '  . $product["lingala"] . '</p>';
    $output = $output . "</li>";

    return $output;
}

function get_products_recent() {
    $recent = array();
    $all = get_products_all();

    $total_products = count($all);
    $position = 0;
    
    foreach($all as $product) {
        $position = $position + 1;
        if ($total_products - $position < 4) {
            $recent[] = $product;
        }
    }
    return $recent;
}

function get_products_search($s) {
    $results = array();
    $all = get_products_all();

    foreach($all as $product) {
        if (stripos($product["english"],$s) !== false) {
            $results[] = $product;
        }
    }
    return $results;
}

function get_products_all() {
    //$products = array();
   /* $products[101] = array(
    	"name" => "Account",
        "lingala" => "Ebomiselo misolo",
    );
    $products[102] = array(
    	"name" => "Accountant",
        "lingala" => "Mobombi misolo",
    );
    $products[103] = array(
        "name" => "Adaptor",
        "lingala" => "Adaptateur",
    );
    $products[104] = array(
        "name" => "Admission",
        "lingala" => "Kokota",
    );
    $products[105] = array(
        "name" => "Afternoon",
        "lingala" => "Pokwa",
    );
    $products[106] = array(
        "name" => "Age",
        "lingala" => "Mbula",
    );
    $products[107] = array(
        "name" => "Airmail",
        "lingala" => "Mokanda na nzela ya mpepo",
    );
    $products[108] = array(
        "name" => "Alarm Clock",
        "lingala" => "Elamuseli",
    );
    $products[109] = array(
        "name" => "Angry",
        "lingala" => "Kanda",
    );
    $products[110] = array(
        "name" => "Answer",
        "lingala" => "Eyano",
    );
    $products[111] = array(
        "name" => "Apple",
        "lingala" => "Mbuma ya pomme",
    );
    $products[112] = array(
        "name" => "April",
        "lingala" => "Sanza ya minei",
    );
    $products[113] = array(
        "name" => "Art",
        "lingala" => "Mosala ya maboko",
    );
    $products[114] = array(
        "name" => "Artist",
        "lingala" => "Moto ya misala ya maboko",
    );
    $products[115] = array(
        "name" => "Arts and Crafts",
        "lingala" => "Misala ya maboko",
    );
    $products[116] = array(
        "name" => "August",
        "lingala" => "Sanza ya mwambe",
    );
    $products[117] = array(
        "name" => "Aunt",
        "lingala" => "Tata mwasi",
    );
    $products[118] = array(
        "name" => "Airplane",
        "lingala" => "Mpepo",
    );
    $products[119] = array(
        "name" => "Avocado",
        "lingala" => "Molobeli",
    );
    $products[120] = array(
        "name" => "Baby",
        "lingala" => "Mwana moke",
    );
    $products[121] = array(
        "name" => "Banana",
        "lingala" => "Etabe",
    );
    $products[122] = array(
        "name" => "Bank",
        "lingala" => "Ebombelo misolo",
    );
    $products[123] = array(
        "name" => "Bakery",
        "lingala" => "Esika basalaka mapa",
    );
    $products[124] = array(
        "name" => "Barber",
        "lingala" => "Mokati suki",
    );
    $products[125] = array(
        "name" => "Baseball",
        "lingala" => "Lisano ya motopi ya maboko",
    );
    $products[126] = array(
        "name" => "Battery",
        "lingala" => "Pile",
    );
    $products[127] = array(
        "name" => "Beans",
        "lingala" => "Madesu",
    );
    $products[128] = array(
        "name" => "Bed",
        "lingala" => "Mbetu",
    );
    $products[129] = array(
        "name" => "Bedroom",
        "lingala" => "Chambre ya kolala",
    );
    $products[130] = array(
        "name" => "Beef",
        "lingala" => "Ngombe",
    );
    $products[131] = array(
        "name" => "Beer",
        "lingala" => "Masanga",
    );
    $products[132] = array(
        "name" => "Bell",
        "lingala" => "Ngonga",
    );
    $products[133] = array(
        "name" => "Bible",
        "lingala" => "Bibilia",
    );
    $products[134] = array(
        "name" => "Bicycle",
        "lingala" => "Kinga",
    );
    $products[135] = array(
        "name" => "Bill",
        "lingala" => "Facture",
    );
    $products[136] = array(
        "name" => "Bird",
        "lingala" => "Ndeke",
    );
    $products[137] = array(
        "name" => "Birds",
        "lingala" => "Bandeke",
    );
    $products[138] = array(
        "name" => "Biscuit",
        "lingala" => "Biscuit",
    );  
    $products[139] = array(
        "name" => "Blackboard",
        "lingala" => "Tableau",
    ); 
    $products[140] = array(
        "name" => "Blanket",
        "lingala" => "Boulanketi",
    );
    $products[141] = array(
        "name" => "Boat",
        "lingala" => "Maswa",
    );
    $products[142] = array(
        "name" => "Body Building",
        "lingala" => "Botongi misisa",
    );
    $products[143] = array(
        "name" => "Bones",
        "lingala" => "Mikuwa",
    );
    $products[144] = array(
        "name" => "Book",
        "lingala" => "Mokanda",
    );
    $products[145] = array(
        "name" => "Books",
        "lingala" => "Mikanda",
    );
    $products[146] = array(
        "name" => "Booking",
        "lingala" => "Kobombisa",
    );
    $products[147] = array(
        "name" => "Boy",
        "lingala" => "Mwana mobali",
    );
    $products[148] = array(
        "name" => "Boys",
        "lingala" => "Bana mibali",
    );  
    $products[149] = array(
        "name" => "Bra",
        "lingala" => "Kinga mabele",
    ); 
    $products[150] = array(
        "name" => "Bread",
        "lingala" => "Lipa",
    );
    $products[151] = array(
        "name" => "Breads",
        "lingala" => "Mapa",
    );
    $products[152] = array(
        "name" => "Breakfast",
        "lingala" => "Petit dejeuner",
    );
    $products[153] = array(
        "name" => "Brother",
        "lingala" => "Ndeko ya mobali",
    );
    $products[154] = array(
        "name" => "Brother-in-law",
        "lingala" => "Semeki ya mobali",
    );
    $products[155] = array(
        "name" => "Building",
        "lingala" => "Ndako",
    );
    $products[156] = array(
        "name" => "Bus",
        "lingala" => "Motuka",
    );
    $products[157] = array(
        "name" => "Business Man",
        "lingala" => "Homme d'affaire",
    );
    $products[158] = array(
        "name" => "Butter",
        "lingala" => "Manteka",
    );  
    $products[159] = array(
        "name" => "Butterfly",
        "lingala" => "Lipekapeka",
    ); 
    $products[160] = array(
        "name" => "Cake",
        "lingala" => "Gateau",
    );
    $products[161] = array(
        "name" => "Calendar",
        "lingala" => "Manaka",
    );
    $products[162] = array(
        "name" => "Camcorder",
        "lingala" => "Ekangeli bilili",
    );
    $products[163] = array(
        "name" => "Camera",
        "lingala" => "Ekangeli bilili",
    );
    $products[164] = array(
        "name" => "Car trouble",
        "lingala" => "Motungisi ya motuka",
    );
    $products[165] = array(
        "name" => "Car",
        "lingala" => "Motuka",
    );
    $products[166] = array(
        "name" => "Cars",
        "lingala" => "Mituka",
    );
    $products[167] = array(
        "name" => "Cash Point",
        "lingala" => "Mashini ya kokabola misolo",
    );
    $products[168] = array(
        "name" => "Cashier",
        "lingala" => "Mobombi misolo",
    );  
    $products[169] = array(
        "name" => "Cat",
        "lingala" => "Niaou",
    );   
    $products[170] = array(
        "name" => "ATM",
        "lingala" => "Mashini ya kokabola misolo",
    ); 
    $products[171] = array(
        "name" => "Check",
        "lingala" => "Facture",
    ); 
    $products[172] = array(
        "name" => "Cavity",
        "lingala" => "Maladi ya mino",
    );  
    $products[173] = array(
        "name" => "Celery",
        "lingala" => "Ndunda ya celeri",
    );  
    $products[174] = array(
        "name" => "Cemetery",
        "lingala" => "Eskia bakundaka batu",
    );  
    $products[175] = array(
        "name" => "Century",
        "lingala" => "Ekeke",
    );
    $products[176] = array(
        "name" => "Chair",
        "lingala" => "Kiti",
    ); 
    $products[177] = array(
        "name" => "Change",
        "lingala" => "Bureau de change",
    ); 
    $products[178] = array(
        "name" => "Chess",
        "lingala" => "Dames",
    ); 
    $products[179] = array(
        "name" => "Chewing Gum",
        "lingala" => "Bazoka",
    ); 
    $products[180] = array(
        "name" => "Chicken",
        "lingala" => "Soso",
    ); 
    $products[181] = array(
        "name" => "Chocolate",
        "lingala" => "Chocolat",
    ); 
    $products[182] = array(
        "name" => "Christian",
        "lingala" => "Mondimi",
    ); 
    $products[183] = array(
        "name" => "Christians",
        "lingala" => "Bandimi",
    ); 
    $products[184] = array(
        "name" => "Church",
        "lingala" => "Ndako ya nzambe",
    ); 
    $products[185] = array(
        "name" => "Cigarette",
        "lingala" => "Likaya",
    ); 
    $products[186] = array(
        "name" => "Cinema",
        "lingala" => "Moboke",
    ); 
    $products[187] = array(
        "name" => "Clerk",
        "lingala" => "Kalaka",
    ); 
    $products[188] = array(
        "name" => "Clock",
        "lingala" => "Montre",
    ); 
    $products[189] = array(
        "name" => "Closed",
        "lingala" => "Ekangami",
    ); */       

require(ROOT_PATH . "inc/database.php");

try {
    $results = $db->query("SELECT english, lingala FROM lingala ORDER BY english ASC");
    //echo "The query ran successfully.";
    //var_dump($db);
} catch (Exception $e){
    echo "Data could not be retrieved from the database."; 
    exit;
}
//echo "<pre>";
//var_dump($results->fetchAll(PDO::FETCH_ASSOC));
$products = $results->fetchAll(PDO::FETCH_ASSOC);

    //foreach ($products as $product_id => $product) {
       // $products[$product_id]["sku"] = $product_id;
   // }

    return $products;
}






?>