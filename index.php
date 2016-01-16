<?hh

require('vendor/autoload.php');

echo '<!DOCTYPE html><html>';
echo '<head>
 <link rel="stylesheet" href="pure-min.css">
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />';

echo '<body/>';
echo "<h1>XHP Örnekleri</h1>";




// Example 1

echo <div>Hello world</div>;









// Example 2

echo <h2>Degiskenlere erisim</h2>;

$href = "http://cnn.com";
echo <a href={$href}>A link to CNN</a>;




// Example 2b
$mydict = ["name" => "Ustun", "surname" => "Ozgur"];

echo <div>My name is {$mydict["name"]}</div>;









// Example 3: DOM methods

echo <h2>DOM methodlari</h2>;

$items = ["Ustun", "Ahmet", "Mehmet"];


$list = <ul />;
foreach ($items as $item) {
  $list->appendChild(<li>{$item}</li>);
}

echo $list;









// Example 4: Custom Element

echo <h2>Özel (custom) elemanlar</h2>;

class :helloworld extends :x:element {
    public function render () {
        return <div>Hello World from XHP</div>;
  }
}

echo <helloworld/>;

class :greeting extends :x:element {
    public function render () {
        return <div>
        This is the parent component with 2 hello worlds!
        <helloworld/>
        <helloworld/>
        </div>;
  }
}

echo <greeting/>;


// Example 5: Custom Element with Attributes

echo <h2>Attribute (parametre) Alan Özel elemanlar</h2>;

class :helloperson extends :x:element {
    attribute string name = "No Name";

    public function render () {
        $name = $this->getAttribute('name');
        return <div>Hello {$name}</div>;
  }
}


echo <helloperson/>;

echo <helloperson name="Ustun"/>;


// Example 6: Custom elements inside custom elements with attributes

echo <h2>Attribute (parametre) Alan Özel elemanlar Kullanan Özel elemanlar</h2>;

class :people extends :x:element {

    attribute array names = ["Ali", "Ayse"];

    public function render() {
        $names = $this->getAttribute('names');
        $list = <ul />;

        foreach ($names as $name) {
            $list->appendChild(<li><helloperson name={$name}/></li>);
        }

        return $list;

    }

}


echo <people/>;

$names = ["John", "Mary"];
echo <people names={$names}/>;
