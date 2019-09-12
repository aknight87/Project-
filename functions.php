<?php
// PHP - Random Quote Generator

// Multidimensional array of quote elements, name it quotes
// Make each inner array element an associative array
$quotes[]= [
  'quote' => 'All that we are is a result of what we have thought.',
  'source' => 'Buddha'
  
 ];

$quotes[]= [
  'quote' => ' I have no special talent. I am only passionatley curious.',
  'source' => 'Albert Einstein'

 ];

$quotes[]= [
  'quotes' => 'If you judge people you have no time to love them.',
  'source' => 'Mother Teresa'
  
 ];

$quotes[]= [
  'quotes' => 'Wisely and slow. Theystumble that run fast.',
  'source' => 'William Shakespeare'
  
 ];

$quotes[]= [
  'quotes' => 'Stay hungry, stay foolish.',
  'source' => 'Steve Jobs'
  
 ];


// Create a getRandomQuuote function

function getRandomQuote($quotes) {
global $qoutes;
return $quotes [array_rand($quotes)];
  
};


// Create printQuote funtion that will display returned quote from getRandomQuote function

function printQuote($favQuotes) {
  $favQuotes = getRandomQuote($quotes);
  $displayQuotes = '';
  $displayQuotes =    '<p class='quote'>' . $favQuotes ['quote'] . '</p>';
  $displayQuotes .=   '<p class='source'>' . $favQuotes ['source'] . '</p>;
  
  }
 
 echo $displayQuotes;
 
 
 
  }
 
 ?>
