<?php

function fizzBuzz($angka)
{
    // Jika habis dibagi 3 dan 5 tambahkan 'FizzBuzz'
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        echo "FizzBuzz\n";
    // Jika habis dibagi 3 tambahkan 'Fizz'
    } elseif ($angka % 3 == 0) {
        echo "Fizz\n";
    // JJika habis dibagi 5 tambahkan 'Buzz'
    } elseif ($angka % 5 == 0) {
        echo "Buzz\n";
    // Jika bukan tampilkan angka
    } else {
        echo $angka . "\n";
    }
    
}

for ($i = 1; $i <= 100; $i++) { 
    fizzBuzz($i);
}