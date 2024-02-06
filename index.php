

<?php 
//    class Film {
//         public $nome;
//         public $genere;
//    }

//    $marefuori = new Film();
//    $marefuori -> nome ="Mare Fuori";
//    $marefuori -> genere = "Azione";

//    var_dump($marefuori);

//    $gomorra = new Film();

// class Address {
//     public $street;
//     public $city;
//     public $postcode;

//     public function __construct($street, $city, $postcode) {

//         $this -> street = $street;
//         $this -> city = $city;
//         $this -> postcode = $postcode;
        
//     }
// }


// class User {  // che è la classe 
//     public $nome;
//     public $eta;
//     public $address; // inseriamo la qui la classe address

//     function __construct($nome, $eta, Address $address) {

//         $this ->nome = $nome;
//         $this ->eta = $eta;
//         $this ->address = $address;
//     }
// }

// $filippo = new User('Filippo', 50, new Address('Via anca del ponte', 'Teggiano', 20345));

// var_dump($filippo);


class Movie { // Creare la Classe

     // Variabile d'istanza
    public $nome; 
    public $genere;
    public $anno;

    // COSTRUTTORE
    function __construct($nome, $genere, $anno) {

        $this ->nome =$nome;
        $this ->genere=$genere;
        $this ->anno =$anno;

    }

    // METODO PER INFO FILM
    public function getInfo() {
        // return $this -> nome;
        // return $this -> genere;
        // return $this -> anno;
        
         return "{$this->nome} ({$this->genere}, {$this->anno})";
        
    }
}
   // CREARE DUE ISTANZE
$film1 = new Movie('Harry Potter', 'Fantasy', '2001');
$film2 = new Movie('Signore degli Anelli', 'Fantasy', '2002');

  // STAMPARE A SCHERMO LE INFO
  echo $film1 ->getInfo();
  echo "<br><br>";
  echo $film2 ->getInfo();


?>  