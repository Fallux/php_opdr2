
<!-- // class Table {
//     public function __construct() {
//         echo "niofoijdfoijdsofjoi" . PHP_E0L;
//     }
// }

// class Row {

// }

// class Cell {
// }

// $table = new Table(); -->
<?php
class Table {
    // public function __construct() {
    //     echo "Instance aangemaakt van Table"  .  PHP_EOL;
    // }

    public $_rows;
    public $_test;
    public function __construct() {
        $this->_rows = array();
        $this->_test = "Ik ben een variabele die van buitenaf te lezen is, want ik ben public" . PHP_EOL;
    }

    public function append($row) {
        $this->_rows[''] = $row;
    }
    public function draw() {
    }
 }
class Row {
    private $_cells;
    public function __construct() {
        $this->_cells = array();
    }
    public function append($cell) {
        $this->_cells[''] = $cell;
    }
    public function getCells() {
        return $this->_cells;
    }
}
class Cell {
    private $_content;
    public function __construct($content) {
        $this->_content = $content;
    }
    public function getContent() {
        return $this->_content;
    }
}


$table = new Table();
echo $table->_test;    // Dit moet lukken, want de variabele is public
echo $table->_rows;  // Dit zou een error moeten opleveren, want de variabele is private
?>
