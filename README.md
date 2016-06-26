# CodeigniterEloquent
Eloquent ORM in Codeigniter (Popular PHP Framework)

we have used CodeIgniter \*Version 3.0.6\* and \*illuminate/database v5.2.37\*.

First download codeIgniter full repo and place index.php file, application and system folder to your project folder.

Second, create a new directory called public in project root directory and place index.php in that directory

Third, create a file called composer.json in project root and require illuminate/database package and then install that package via composer install command. (N.B. If composer is not presnet in your system then install it first).

Now lets include autoload.php file in index.php file by adding

	require_once '../vendor/autoload.php';

then we need to config and install Eloquent. To do so in database config file add these lines in bellow default CI database config. Create a New Database and then config accordingly.

	$capsule = new Capsule;
	$capsule->addConnection([
	    'driver'    => 'mysql',
	    'host'      => $db['default']['hostname'],
	    'database'  => $db['default']['database'],
	    'username'  => $db['default']['username'],
	    'password'  => $db['default']['password'],
	    'charset'   => $db['default']['char_set'],
	    'collation' => $db['default']['dbcollat'],
	    'prefix'    => $db['default']['dbprefix'],
	]);
	$capsule->setAsGlobal();
	$capsule->bootEloquent();

and add use on top
	Illuminate\Database\Capsule\Manager as Capsule; 


Now All Configuration and installation done. it's time to play with Eloquent ORM in CodeIgniter
to begin with create a model class called usermodel like bellow

	use Illuminate\Database\Eloquent\Model as Eloquent;
	
	class Usermodel extends Eloquent
	{
		protected $table = 'users';	
	}

And In Controller load that model as usual and then use like bellow
    
    $this->load->model('usermodel');

		$users = Usermodel:: all();
		foreach($users as $user)
		{
			echo $user->fname. ' '. $user->lname.'<br/>';
		}
