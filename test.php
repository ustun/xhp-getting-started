<?hh


function add_one(int $x): int {
  return $x+1;
}

function test(): void {
  $my_string = 'hello';

  // Some clever code ...
// $my_string = 3;

  add_one($my_string);
}
