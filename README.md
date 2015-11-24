# Realm Digital - Developer Program & Web Developer Evaluation
*This is a laravel 5 application running php 7. If you are familiar with docker and/or docker compose you can look in the .docker file.
*Else you can check it out and see [Laravel 5.1](http://laravel.com/docs/5.1) for installation docs

## Developer Program
1. Write a function that replaces characters in a string, without using language function “string replace”
2. Write a function that checks if a given sentence is a palindrome. A palindrome is a word, phrase, verse, or sentence that reads the same backward or forward. Only the order of English alphabet letters (A-Z and a-z) should be considered, other characters should be ignored.
    * "abccba" = true
    * "a man, a plan, a canal, panama" = true
    * "aabbcc" = false
    * "a quick brown fox" = false
3. Write a function that takes 2 integer arrays, and returns an array containing the duplicate values [1, 2, 3, 4, 5, 6] & [4, 5, 6, 7, 8, 9] should return [4, 5, 6]
4. Write a function that takes an integer array, and returns an array containing the values that occur once, eg [1, 2, 3, 3, 5, 1,7, 2] should return [5, 7]
5. Write a function that takes an integer array, sorts it in ascending order, without using language function “array sort” - eg [4, 6, 1, 3, 2, 5] should return [1, 2, 3, 4, 5, 6]

All questions are answered in <code>app/http/Controllers/IndexController.php)</code> and will be under (http://yourdomain.com/) for printed results

## Web Developer Evaluation
### Part 1: HTML and CSS
Build a Traffic Light. Produce a traffic light or robot. It should have 3 vertical lights showing the colours of the traffic light. Please include a small and large traffic light in 1 single HTML page. Both traffic lights should be identical
except for size.

I have loaded the full page in (resources/views/robot.blade.php), usually will be templated, but for convenience it is all on one page

### Part 2: JavaScript
Build an Interactive Traffic Light. Using any JS means possible including a framework of your choice, update the html for part 1 to perform
the following:
1. Hovering over the traffic light should show its colour.
2. Clicking on the traffic light should turn the colour on or off.

I have loaded the full page in (resources/views/robot.blade.php), usually will be templated, but for convenience it is all on one page

### Part 3: Software Design
Design a Phone book application.

**Requirements:** You are required to capture and manage your friends and phone numbers.

**Architecture:** Application is web based and all data is stored in a database.

**Considerations:** All databases access is not for consideration. All data is read from the database magically.
All UI interaction is not for consideration.

**Deliverables:**
In any way you feel best provide the classes, objects etc that you would use to achieve this.
The full database structure required to achieve.
We are not expecting to see code to implement the application.

Please retain all materials include paper for review.

The ERD can be seen in (database/erd.png) and the create script is in (database/phonebook.sql)

*In a phonebook you can have friends (User) and a telephone number (Number), on friend can have many numbers.

*(realmDigtal/Exmaple.php) has a basic run function that just displays some functionality.

*(realmDigtal/Book.php) is my phonebook and defines what my phonebook can do.

*(realmDigtal/User/User.php) is my ‘friend’, it consists of a id, name, surname and phone numbers.

*(realmDigtal/User/UserCommands.php) is my interface for the actions for my friends in my phonebook.

*(realmDigtal/User/UserImplemented.php) is defined commands, this would contain storage implementation.
