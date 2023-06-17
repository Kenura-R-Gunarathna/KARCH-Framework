# KARCH #

A light-weight and fast MVC framework for php developers. This is build with a system similar to Laravel and for people who require light-weight framework than Laravel can easily adapt to this as well.  

## Routes ##

Class for the routes are included inside the `routes` folder as `web.php`.

use 

```
use App\Route;
```
to include the route class.

```
Route::post('/login', Controller::class, 'login');

Route::post('/function', function () {
    echo "The anonymous callback function has been executed.";
});
```
## Controllers ##

Class for the controllers are included inside the `routes` folder as `controller.php`.

use 

```
use App\Controller;
```
to include the controller class.

```
public static function login()
{
    // code...
}
```
## Views ##

To view a html or php file. All the view file locations are given relative to the `Views` folder. 

eg:- `/index.html` or `index.html` ( for a file as `index.html` inside the views folder )

```
view("{view-location}");
```

## Redirects ##

To redirect a web page insert

```
redirect("{full-url}");
```

here you should insert the full url of the web page.

## Requests ##

Class for the requests are included inside the `includes` folder as `data_handling.php`.

use 

```
use App\DataHandling;
```
to include the requests class.

### env data ###

```
$data = new DataHandling();

echo $data->env->APP_NAME;
```

### get, post and session requests ###

```
echo $data->request->username;
echo $data->request->password;
```
### get request ###

```
echo $data->get->username;
echo $data->get->password;
```
### post request ###

```
echo $data->post->username;
echo $data->post->password;
```

## Database Queries ##

Class for the db queries are included inside the `includes` folder as `database.php`.

use 

```
use App\DB;
```
to include the database class.

### Records selection ###

```
$data = DB::table("users")->query("where id='1'")->setFetchMode(PDO::FETCH_OBJ)->get();

foreach ($data as $col) {
    echo "Name : " . $col->name . "<br>";
    echo "Age : " . $col->age . "<br>";
    echo "Email : " . $col->email . "<br>";
}
```

### Mass records insert ###

```
$data = DB::table("users")->insert([
    ['name' => 'lisara', 'age' => 24, 'email' => 'lisara@gmail.com', 'updated_at' => date('Y-m-d H:i:s'), 'created_at' => date('Y-m-d H:i:s')],
    ['name' => 'sanuli', 'age' => 14, 'email' => 'sanuli@gmail.com', 'updated_at' => date('Y-m-d H:i:s'), 'created_at' => date('Y-m-d H:i:s')],
]);

return print($data); // whether insertion is successfull or not
```


### Single record insert ###

```
$data = DB::table("users")->setTableId("id")->setFetchMode(PDO::FETCH_OBJ)->create(
    [
        'name' => 'lisara',
        'age' => 24,
        'email' => 'lisara@gmail.com'
    ]
);

foreach ($data as $col) {
    echo "Name : " . $col->name . "<br>";
    echo "Age : " . $col->age . "<br>";
    echo "Email : " . $col->email . "<br>";
}
```

### Update records ###

```
$data = DB::table("users")->query("where id='1'")->update(
    [
        'name' => 'Kenura',
        'age' => 19,
        'email' => 'kenura@gmail.com'
    ]
);

return print($data); // count of updated records
```

### Delete records ###

```
$data = DB::table("users")->query("where id='16'")->delete();

return print($data); // whether delete is successfull or not
```

## Migrations ##

All the migrations required to create tables are in the `database/migrations` folder, each with their respective table name.

```
<?php

require_once __DIR__ . '/../../includes/error_handling.php';
require_once __DIR__ . '/../../includes/database.php';
require_once __DIR__ . '/../../includes/data_handling.php';

use App\DB;
use App\DataHandling;

$table_name = "users";

try {
    $users = DB::table($table_name)->migrate([
        "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
        "username VARCHAR(256) NOT NULL",
        "password VARCHAR(256) NOT NULL",
    ]);

    if ($users) {
        return print("$table_name migration completed successfully!");
    }
} catch (\Throwable $th) {
    return print("migration error : " . $th->getMessage());
}
```

to run a migration such as below run the code

```
php databse\migrations\{migration-filename}.php
```

## Error Handling ##

