# Introduction to OOP in PHP

## Part 1: Basic OO Concepts
First, well get familiarity with basic OO concepts in PHP.

- Open your Codespace
- Clone this repository into your codespace. 
- In the terminal enter:
```
git clone https://github.com/CHT2520-web-prog/intro-to-oop
```
- In terminal, navigate to the _intro-to-oop__ folder

```
cd intro-to-oop
```
- Start the web server
```
php -S 0.0.0.0:8000
```
In the web browser put `/oo-basics.php` on the end of the URL. 

You should get output that looks something like the following:

```
object(Student)#7 (3) { ["studentNum":"Student":private]=> string(8) "u0123456" ["firstName":"Student":private]=> string(4) "John" ["lastName":"Student":private]=> string(5) "Smith" } 
```

* Open _oo-basics.php_ in a text editor and answer the questions. 
* In VS Code open [intro-to-oo-notes](intro-to-oo-notes.md). The notes will help you answer the questions. 

## Part 2: Applying OOP
Now we'll look at an example where we apply OOP in building web applications.
- In the browser open _index.php_ (or simply remove _/oo-basics.php_ from the end of the URL).
- A list of films should be displayed. 

This is a partially complete version of the same CRUD app we worked on last week, but it uses OOP to help structure the code. 

Have a good look at _index.php_. There are several key differences from the basic example we looked at last week.
- This page doesn't output any HTML. Instead, it requires a view file, _index.view.php_ which generates the output. 
- This page no longer works with the database directly i.e. no SQL queries, instead it asks the `FilmRepository` to get data from the database.

Look at the associated files, _Film.php_, _FilmRepository.php_ and _index.view.php_ and try and understand how the app is working. 

Do the same for the _store.php_, _show.php_ and _edit.php_ pages. See how we are now using OOP e.g. when adding a new film, we create a new film object and then ask the repository to save the film. 

### Test your understanding
- Modify _show.view.php_ so that this page also displays how old the film is. You will need to call the `getAge()` method on the film object.
- All the CRUD actions should work apart from update and delete. Add code in _update.php_ and _destroy.php_ that will use the `FilmRepository` to update/delete the selected film from the database. 

