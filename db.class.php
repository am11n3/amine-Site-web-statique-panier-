<?php  
	
	class DB
	{
		private $host		= 'localhost';					                //'localhost';
		private $username 	= 'id12809098_amineren'; 						//'id12809098_amineren';
		private $password 	= 'amine_smi6';					        		//'amine_smi6';
		private $database 	= 'id12809098_datanime';						//'id12809098_datanime';		
		private $db;	

		//connection a la table produits
		public function __construct($host=null,$username=null,$password=null,$database=null)
		{
			if($host!=null)
			{
				$this->host=$host;
				$this->username=$username;
				$this->password=$password;
				$this->database=$database;
			}
			try
			{
				$this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->username,$this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
					PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
			}
			catch(PDOException $e)
			{
				die('<h1>Impossible de se connecter a la base de donnee</h1>');
			}
		}

		public function query($sql,$data=array())
		{
			$req=$this->db->prepare($sql);
			$req->execute($data);
			return $req->fetchAll(PDO::FETCH_OBJ);
		}
	}

	//connection a la table client
	    $servername = "localhost";
		$username = "id12809098_amineren";
		$password = "amine_smi6";
		$database 	= 'id12809098_datanime';

		try {
		    $con = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
		    // set the PDO error mode to exception
		    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    }
		catch(PDOException $e)
		    {
		    echo "Connection failed: " . $e->getMessage();
		    }



?>
