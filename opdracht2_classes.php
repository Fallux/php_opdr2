
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
$eersteCell = new Cell('admin_id');
$tweedeCell = new Cell('username');
$derdeCell  = new Cell ('password');

$allRow = new Row();
$allRow->append($eersteCell);
$allRow->append($tweedeCell);
$allRow->append($derdeCell);

$table = new Table();
echo $table->_test;
$table->append($allRow);
$table->draw();


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
        echo'<div id="container">'.PHP_EOL;
        foreach($this->_rows as $row){
            echo'<div id="box">'.PHP_EOL;
            foreach($row->getCells() as $cell){
            echo '<h5>' . $cell->getContent(). '</h5>'.PHP_EOL;
            }
            echo"</div>".PHP_EOL;
        }
        echo"</div>".PHP_EOL;
    }
}

class Row {
    public $_cells;
    public function __construct() {
        $this->_cells = array();
    }
    public function append($cell) {
        $this->_cells[''] = $cell;
        // $this->$cell[0] = $admin_id;
        // $this->$cell[1] = $username;
        // $this->$cell[2] = $password;
    }
    public function getCells() {
        return $this->_cells;
    }
}
class Cell {
    public $_content;
    public function __construct($content) {
        $this->_content = $content;
        // $admin_id=1;
        // $username='gerald12';
        // $password='Not Set';
    }
    public function getContent() {
        return $this->_content;
    }
}

// echo $username;
   // Dit moet lukken, want de variabele is public
// echo $table->_rows;  // Dit zou een error moeten opleveren, want de variabele is private
?>
