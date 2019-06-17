# Task41_OchoaDaniel

## Statement

Show a list of restaurants from an array

# Task

You have to implement a restaurant reviews web project.
In this task, we will do the main web page, index.php, that shows a list of the most 5 valued restaurants. This list of restaurant information will be stored in an array, and to obtain this list of restaurants, we will call a function named getRestaurants().

You have to show this information of each restaurant:
*Name
-Locality
+Route
*StreetNumber
+PostalCode
-PhoneNumber
+A photography


# Explication

I started my project with a template that I found on the resources document. For make this top 5 possible, I did an array that include another array where we can find some keys like the name of the restaurant, his locality, route, street number, etc. 

In the rest of the webpage I show a section on the website and what has been its evolution, or the creator of the website. Also, there is a button that scrolls you to the restaurants and a navigator bar at the top of the webpage for go to the section that you want.

# Information

Task: 4.1

Author: Daniel Ochoa Mesa

Subject: Implantación de Aplicaciones Web

School: IES Francesc de Borja Moll- ASIX 2018-2019

# Task42_OchoaDaniel

## Statement

Search and order the list of restaurants

# Task

Starting from the Task 4.1 project, you have to add to the main web page a form to perform a search and to order the list of restaurants.

You have to pass this parameters to the getRestaurants(), function. This function will return the restaurants that contain this search string (regardless if the name of the restaurant has uppercase or lowercase letters), ordered by the name of the restaurant in ascending or descending order.
Then, the index.php page will show this results.
The getRestaurants() function must be in an independent file, functions.php.

# Explication

In this task I added a new search bar at our nav-bar where we can search the name of the restaurant we are looking for. Also it's possible to sort the list of the restaurant in order ascending and descending.



# Task61_OchoaDaniel

## Statement

Show restaurants information from a database

# Task

Starting from the Task 4.2 project, you have to change the getRestaurants() function to perform the search over a database.
First of all, you must create a database, restaurants, import the restaurants.sql file.
You must pass the parameters of the form in the main web page, with the search string and the order option, to the getRestaurants(), function. This function will return the restaurants that contain this search string (regardless if the name of the restaurant has uppercase or lowercase letters), ordered by the name of the restaurant in ascending or descending order, performing a SELECT command over the created database.
Then, the index.php page will show this results. When you click on a restaurant, you must show a restaurant.php file, with all the information of the selected restaurant, using a getRestaurant() function.
The getRestaurants() and  getRestaurant() function must be in an independent file, restaurantsdb.php.
The connection variable to the database must be in an independent file, connection.php.


# Explication

Continuing with practice 4.2, we are going to create a new restaurantsdb.php file that will pick up the two functions that we will use in the website. With the first one we will show a list of restaurants that are in the database, and the next, a restaurant with all its data.

# Information

Task: 6.1

Author: Daniel Ochoa Mesa

Subject: Implantación de Aplicaciones Web

School: IES Francesc de Borja Moll- ASIX 2018-2019

# Task71_OchoaDaniel

## Statement

Login in the restaurants website

# Task

Starting from the Task 6.1 or 6.2 project, you have to modify the index.php page to show the logged user in the webpage, using sessions:
If it exists a logged user, you have to show his username and his email, and a button to log out
If it doesn’t exist a logged user, you have to show a log in button

You must create a login.php page, that shows a form, asking for a username and a password. With the POST method you have to read this parameters, and query the database searching this user. If this username and password are correct, you have to store the necessary information into sessions variables and return to the index.php page.
You must also create a logout.php page to remove all session information from this user.

# Explication

For the final task, I introduced it the query with all the users and a new one named alumne with password alumne.
Creating a login.php, logout.php and the principal function on restaurantsdb.php, It's enough for this task.

# Information

Task: 7.1

Author: Daniel Ochoa Mesa

Subject: Implantación de Aplicaciones Web

School: IES Francesc de Borja Moll- ASIX 2018-2019


