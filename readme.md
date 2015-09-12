Buildcorner API
=======


Folder System
---------------
* -- lib/
    * Config.php (Class to store with config variables)
    * Core.php (Singleton PDO connection to the DB and passed into NotORM)
* -- controllers/
* -- models/
* -- public/
* -- routes/
	* name.routes.php (routes by functionalities)


Get Started
--------------
* install composer using the following command
```sh
 curl -sS https://getcomposer.org/installer | php
```
* After Completion of first Step use the following command to install dependencies
```sh
php composer.phar install
```


### lib/

Here we have the core classes of the connection with the DB

### models/

Add the model classes here.
We are using NotORM for the Database.

Example of Base Model:
models/Base.php

```php

class Base {

    protected $db;
    protected $core;

    public function __construct(){
		      $this->core = Core::getInstance(); //getting instance from core
          $this->db = $this->core->connection; //setting models $db to connection with database and use NOTORM
    }

}

```

Example of Color model extending Base model
Colors.php

```php
class Colors extends Base {

	public function getColors(){
		$colors = array();
		foreach ($this->db->colors() as $color) {
			$colors[] = $color['color_name'];
		}
		return $colors;
	}

}
```

### controllers/
All the controllers are written in this folder and they are used for controlling the routes.You can find all the function that are used in routes folder.

Example of a controller
```php
class ColorsControllers extends Base
{
  public static function allColors()
    {
        $colors = new Colors();
        $data = $colors->getColors();
        echo json_encode($data);
    }
}
```
### routes/

All the files with the routes. Each file contents the routes of an specific functionality.
It is very important that the names of the files inside this folder follow this pattern: name.routes.php

Example of router file:

color.router.php

```php
//to fetch all the colors we can directly call the controller from here
$app->get('/colors',function(){ColorsControllers::allColors();});
```


How to Work with this Repository
-----------------
### Pull Requests

1. Fork the Buildcorner-API repository
2. Create a new branch for each feature or improvement
3. Send a pull request from each feature branch to the develop branch
