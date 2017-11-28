 <?php 
 class Person
 {
 	private $allowDynamicAttributes = false;

 	/**
 	 * dfiadsfg
 	 * @var integer
 	 */
 	protected $id = 0;

 	/**
 	 * GOOD ODFIsdif sdoif 
 	 * @var [type]
 	 */
 	protected $name;


 	public function getId()
 	{
 		return $this->id;
 	}

 	public function setId($id)
 	{
 		$this -> id = $id;
 	}

 	public function getName()
 	{
 		return $this -> name;
 	}

 	public function setName($name)
 	{
 		$this -> name = $name;
 	}

 }

 $person = new ReflectionClass('Person');
 $properties = $person -> getProperties();

 foreach ($properties as $property) {
 	echo $property -> getName(),PHP_EOL;
 }

 foreach ($properties as $property) {
 	if($property -> isProtected()) {
 		$docblodk = $property -> getDocComment();
 		echo $docblodk,PHP_EOL;
 		// preg_match('/type\=([a-z_]*)/', $property -> getDocComment(), $matches);
 		// echo $matches[1],PHP_EOL;
 	}
 }

 $privateProperties = $person -> getProperties(ReflectionProperty::IS_PRIVATE | ReflectionProperty::IS_PUBLIC);
 foreach ($privateProperties as $privateProperty) {
 	echo $privateProperty -> getName(), PHP_EOL;
 }

 $ec = $person -> getmethod('getName');
 // echo $ec -> invoke();


