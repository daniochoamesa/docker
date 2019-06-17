<?php 


function getRestaurants($cerca,$orden){
          $rest = [                      #Here are located all the arrays with the information of all the restaurants.
              array(
                "name"=>"Il Colosseo",
                "locality"=>"Can Pastilla",
                "route"=>"Carrer d'Ovidi",
                "streetNumber"=>"22",
                "postalCode"=>"07610",
                "phoneNumber"=>"+34 971262479",
                "photo"=>"https://media-cdn.tripadvisor.com/media/photo-i/0e/f1/11/ca/photo0jpg.jpg"
              ),
              array(
                "name"=>"Pizzeria Lounge Bar Tentazione",
                "locality"=>"Palma",
                "route"=>"Carrer del Golf de Cadis",
                "streetNumber"=>"5",
                "postalCode"=>"07007",
                "phoneNumber"=>"+34645501914",
                "photo"=>"https://media-cdn.tripadvisor.com/media/photo-i/0e/ca/ae/7b/come-a-casa-mia-relax.jpg"
              ),
              array(
                "name"=>"Pizzeria 500 Grados",
                "locality"=>"Palma",
                "route"=>"Calle de Felix Meravelles",
                "streetNumber"=>"6",
                "postalCode"=>"07003",
                "phoneNumber"=>"+34 871805696",
                "photo"=>"https://media-cdn.tripadvisor.com/media/photo-f/09/9f/3a/dc/500-degrees-pizzeria.jpg"
              ),
              array(
                "name"=>"Armonia Pizzeria y Cafetería",
                "locality"=>"Palma",
                "route"=>"Calle Olmos",
                "streetNumber"=>"13",
                "postalCode"=>"07003",
                "phoneNumber"=>"+34 971104029",
                "photo"=>"https://media-cdn.tripadvisor.com/media/photo-i/0d/ac/26/42/pizza-bresaola-rucola.jpg"
              ),
              array(
                "name"=>"Don Salvatore",
                "locality"=>"Palma",
                "route"=>"Avenida Joan Miró",
                "streetNumber"=>"44",
                "postalCode"=>"07015",
                "phoneNumber"=>"+34 871777393",
                "photo"=>"https://media-cdn.tripadvisor.com/media/photo-s/08/2f/eb/24/maravillosa-y-sabrosisima.jpg"
              )
              ];

              if (!empty($cerca)) {                       //Here we say if the search bar isn't empty
                echo "Cercar ".$cerca."<br>";
                $trobat = [];                             //Create a new array that will include the restaurants found
                  foreach($rest as $key=> $value){
                      if (strpos(strtoupper($value["name"]),strtoupper($cerca))!==FALSE) {
                          $trobat[] = $value;
                      }
                  }
                  if($orden=="asc"){                      //If you selected 'Ascendent' the list will be ordered ascending
                    sort($trobat);
                  }
                  else{                                   //Else, the order will be descending
                    rsort($trobat);
                  }
                  return $trobat;
              }
              elseif($orden=="asc"){                      //If the search bar is empty, and the order is ascending, will be listed ascending.
                sort($rest);
              }
              else{                                       //Else, descending
                rsort($rest);
              }
                return $rest;
}
              
?>
