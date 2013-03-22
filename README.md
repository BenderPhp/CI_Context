CI_Context
==========

CI_Context vous permet de connecter facilement vos librairies a l'environnement CodeIgniter.

Synospys
===
```php
<?php

class Example_lib extends CI_Context {


    public function __construct() {
        parent::__construct();
    }

    public function example_method() {

        // Load helper
        $this->load->helper('string');

        // Load model
        $this->load->model('customer');

        // Get customer with id = 5
        $this->customer->find(5);

    }

}

?>
```

Sans CI_Context
===

```php
<?php

class Example {

    private $CI;

    public function __construct() {
        parent::__construct();

        // Load CI instance
        $this->CI =& get_instance();
    }


    public function example_method() {

        // Load helper
        $this->CI->load->helper('string');

        // Load model
        $this->CI->load->model('customer');

        // Get customer with id = 5
        $this->CI->customer->find(5);

    }

}

?>
```

Il vous suffit de déposer CI_Context dans votre dossier `application/libraries` et d'ajouter la librairie dans votre fichier `config/autoload.php`

Bon code !
