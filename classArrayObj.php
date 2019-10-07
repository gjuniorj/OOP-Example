<?php

//Class for working with arrays

class ArrayObj{


    /**
     * Private attribute array
     */
    private $array;


    /**
     * Constructor of the class.
     */
    function __construct(){
        $this->array = array();
    }

    /**
     * Destructor of the class.
     */
    function __destruct(){
        unset($this->array);
    }

    /**
     *  @return array
     */
    function getArray(){
        return $this->array;
    }

    /**
     * Returns length of array.
     * @return int
     */
    function length(){
        return count($this->array);
    }


    /**
     * Dynamically inserts elements in a array with the specified delimiter between elements.
     * @param string $delimiter
     */
    function createDynamically($delimiter = ''){

        $ind = 0;

        do{
            echo "Element: ";
            $elem = readline();

            $this->array[$ind] = $delimiter.$elem.$delimiter;

            $ind++;

            echo "Insert another element (y/N): ";
            $answer = strtolower(readline());

        } while ($answer == 'y' );

    }


    /**
     * Draws an array with separator (between elements) and delimiters (in the beginning and in the end of the array)
     * @param string $separator
     * @param string $initialDelimiter
     * @param string $endDelimiter
     */
    function draw($separator, $initialDelimiter, $endDelimiter){

        echo "$initialDelimiter";

        $arrayLength = $this->length();

        for ($ind=0; $ind<$arrayLength; $ind++){

            if ($ind == $arrayLength-1){
                //Draws last element
                echo $this->array[$ind];
            }
            else {
                echo $this->array[$ind];
                echo $separator;
            }
        }

        echo "$endDelimiter";

        echo "\n";

    }


}

?>