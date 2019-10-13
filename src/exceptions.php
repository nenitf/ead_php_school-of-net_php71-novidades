<?php

class MyE extends Exception {};
class MyE2 extends Exception {};

class Car
{
    public function drive($m = 1)
    {
        try{
            if($m == 10)
            {
                throw new MyE("Error...E 1");
            }

            if($m == 9)
            {
                throw new MyE2("Error...E 2");
            }

            echo "Driving...";

            // Evita multiplos catches
        } catch (MyE | MyE2 $e){
            echo $e->getMessage();
        }
        /*
        } catch (MyE $e){
            echo $e->getMessage();
        } catch (MyE2 $e){
            echo $e->getMessage();
        }
         */
    }
}

$x = new Car();
$x->drive(9); 
