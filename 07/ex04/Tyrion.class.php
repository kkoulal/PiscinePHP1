<?php
    class Tyrion extends lannister{
        public function sleepWith($obj){
            if($obj instanceof Jaime)
                print "Not even if I'm drunk !".PHP_EOL;
            if($obj instanceof Sansa)
                print "Let's do this.".PHP_EOL;
            if($obj instanceof Cersei)
                print "Not even if I'm drunk !".PHP_EOL;
        }
    } 
?>