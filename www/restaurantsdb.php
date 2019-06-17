<?php
require_once 'connection.php';
function getRestaurants($cerca,$orden){
    
    global $db;

    if ($orden=="desc") {
        $ascdesc = "DESC";
    } else {
        $ascdesc = "ASC";
    }
    $sql = "SELECT r.id, r.name, r.locality, r.postalCode, r.route, r.phoneNumber, i.filePath 
            FROM restaurant r, image i 
            WHERE r.id = i.restaurantId AND r.name like '%$cerca%' ORDER BY r.name $ascdesc";

$trobat = mysqli_query($db,$sql) or die(mysqli_error($db));                             //Create a new array that will include the restaurants found
if (!empty($cerca)) {                       //Here we say if the search bar isn't empty
    echo "Cercar ".$cerca."<br>";
  }

  $data = mysqli_fetch_all($trobat, MYSQLI_ASSOC);
  mysqli_free_result($trobat);

    return $data;
}

function getRestaurant($id){        #Function that will show the information about a restaurant

    global $db;

    $sql1 = "SELECT r.id, r.name, r.description, r.openingHours, r.priceCategory, r.locality, r.streetNumber, r.postalCode, r.route, r.phoneNumber, r.website, r.email, r.rating, r.isTrending, i.filePath
            FROM restaurant r, image i
            WHERE r.id=i.restaurantId AND r.id=$id";

    $trobat1 = mysqli_query($db,$sql1) or die(mysqli_error($db));                             

    $data1 = mysqli_fetch_all($trobat1, MYSQLI_ASSOC);

    mysqli_free_result($trobat1);
    mysqli_close($db);

        return $data1;
}

function getLogin($user, $password){      #For start the function, you need 2 parameters
    global $db;
  
    $user = mysqli_real_escape_string($db,$user);   
    $password = mysqli_real_escape_string($db,$password);
    $query = "SELECT User.username,User.password,User.name,User.id FROM User WHERE username='$user'";   #That's the query that will ask to the database
  
    $resultado=mysqli_query($db,$query);
    if (mysqli_num_rows($resultado) > 0){      #If the data is bigger than 1 row, continue
      $data2 = [];
      $data2 = mysqli_fetch_assoc($resultado);
  
      if ($data2['username']==$user && $data2['password']==md5($password)) {    #If the username and password match with the database, do:
        $_SESSION["username"]=$user;
        $_SESSION["name"] = $data2['name'];
        $_SESSION["id"] = $data2['id'];
        header('Location: index.php');
      } else {      #Else, try it again
          echo "Te has equivocado, inténtalo de nuevo";
        }
    } else {
        echo "Te has equivocado, inténtalo de nuevo";
    }
  
  }
?>
