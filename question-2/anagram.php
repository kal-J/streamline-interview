
function anagram($string1, $string2) {
  $string1 = strtolower($string1);
  $string2 = strtolower($string2);
  
  
  $string1 = str_replace(' ', '', $string1);
  $string2 = str_replace(' ', '', $string2);
  
  $string1Chars = str_split($string1);
  sort($string1Chars);
  $string1_sorted = implode('', $string1Chars);
  
  $string2Chars = str_split($string2);
  sort($string2Chars);
  $string2_sorted = implode('', $string2Chars);
  
  return ($string1_sorted == $string2_sorted);
  
  
  
}