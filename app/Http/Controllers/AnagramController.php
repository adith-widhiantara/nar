<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnagramController extends Controller
{
    private $ana = [
        'kita', // 0
        'atik', // 1
        'tika', // 2
        'aku', // 3
        'kia', // 4
        'makan', // 5
        'kua' // 6
    ];

    private $result = array();

    public function index()
    {
        for ($i = 0; $i < count($this->ana); $i++) {
            for ($j = 0; $j < count($this->ana); $j++) {
                //
                if ($i == $j) {
                    echo 'persis';
                }

                if (strlen($this->ana[$i]) != strlen($this->ana[$j])) {
                    echo ' beda ' . strlen($this->ana[$i]) . ' ' . strlen($this->ana[$j]);
                } else {
                    echo ' sama ' . strlen($this->ana[$i]) . ' ' . strlen($this->ana[$j]);
                }
                //
            }
        }
    }

    public function anagram($arrb)
    {
        return $arrb;
    }
}
