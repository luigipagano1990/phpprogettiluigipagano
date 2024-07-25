<?php

class Vertebrate {
    public function __construct() {
        $this->printClassification();
    }

    protected function printClassification() {
        echo "Sono un animale Vertebrato\n";
    }
}

class WarmBlooded extends Vertebrate {
    protected function printClassification() {
        parent::printClassification();
        echo "Sono un animale a Sangue Caldo\n";
    }
}

class ColdBlooded extends Vertebrate {
    protected function printClassification() {
        parent::printClassification();
        echo "Sono un animale a Sangue Freddo\n";
    }
}

class Mammal extends WarmBlooded {
    protected function printClassification() {
        parent::printClassification();
        echo "Sono un Mammifero\n";
    }
}

class Bird extends WarmBlooded {
    protected function printClassification() {
        parent::printClassification();
        echo "Sono un Uccello\n";
    }
}

class Fish extends ColdBlooded {
    protected function printClassification() {
        parent::printClassification();
        echo "Sono un Pesce\n";
    }
}

class Reptile extends ColdBlooded {
    protected function printClassification() {
        parent::printClassification();
        echo "Sono un Rettile\n";
    }
}

class Amphibian extends ColdBlooded {
    protected function printClassification() {
        parent::printClassification();
        echo "Sono un Anfibio\n";
    }
}


$magikarp = new Fish();

?>
