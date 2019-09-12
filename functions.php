<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
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


// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($quotes) {
global $qoutes;
return $quotes [array_rand($quotes)];
  
};


// Create the printQuote funtion and name it printQuote
function printQuote($favQuotes) {
  $favQuotes = getRandomQuote($quotes);
  $displayQuotes = '';
  $displayQuotes =    '<p class='quote'>' . $favQuotes ['quote'] . '</p>';
  $displayQuotes .=   '<p class='source'>' . $favQuotes ['source'] . '</p>;
  
  }
 
 echo $displayQuotes;
 
 
 
  }
 
 ?>
