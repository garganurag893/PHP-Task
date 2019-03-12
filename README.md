# PHP-Task
# Task 2 - 
Create two pages index.php and submit.php.

First page (index.php) should have, a Form (<form>) which submits to (action=”submit.php”) and within the first page you should have
1. Text written: “Enter your name”
2. A Text box to take an input (<input type=”text” name=”name” />)
3. A submit button (<input type=”submit” />)
Second page (submit.php) should read the data from the request using ($_GET or $_POST or $_REQUEST) and show a message, “Hey {name}, nice to meet you. I am PHP”
NOTE : Now, you must have a very clear understanding where JavaScript executes and where PHP executes.
 
# Task 3 -
Improve the last program such that it takes a number “n” from (index.php) and displays the table of that number on submit.php. There won’t be much changes on index.php, just rename the field from “name” to “number” and rename the text to “Enter a number”

The second page (submit.php) should show something like this when input is 5.
5 x 1 = 5
5 x 2 = 10
...
# Task 4 -
6. We will use an associative array to represent a single TodoItem. If you don’t know what’s an associative array then you must know how to get the answer. Ex: [ ‘caption’ => ‘Buy Milk’, ‘isCompleted’ => false]
We will store every TodoItem in array called TodoCollection. Ex: [ [‘caption’ => ‘Buy Milk’, ‘isCompleted’ => false], [‘caption’ => ‘Be Awesome’, ‘isCompleted’ => false] ].

7. We will store the TodoCollection in a session variable.

8. Now lets create a page todo.php to display the Todo List and to add a new Item.

9. In todo.php, check if TodoCollection is defined in a session variable or not, if not then lets declare it as an empty array.

<?php
session_start();
if(!isset($_SESSION[‘todoCollection’]))
$_SESSION[‘todoCollection’] = [];
?>

Now, Add a form in todo.php with action “storeItem.php”, method “post” and an input field “item” to add a todoItem.

Create the page storeitem.php, where you will fetch $_POST[‘item’] and push an todoItem to $_SESSION[‘todoCollection’].

array_push($_SESSION[‘todoCollection’], [‘caption’ => $_POST[‘item’], ‘isCompleted’ => false]);

What is the shorthand to array_push?

10 . Now lets display the todoItem in todo.php using <ul> and <li>.

11 . Put a for loop for <li> elements to display the caption. An Example to put php in between of html elements is.
<ul>
<?php for($i = 0; $i < sizeof($array)); $i++) { ?>
<li><?php echo $array[$i][‘caption’]; ?></li>
<?php } ?>
</ul>

Finally let’s use some Bootstrap CSS

# Task 6 -
Create a file /input.php which has a form and <input> and submit it to /save.php

Create /save.php, read the user’s input and write the same to a file say “user-input.txt” on the server.

Hint: You may use file_put_contents()
