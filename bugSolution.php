function foo(a, b) {
  $a = $a ?? 0; // Use null coalescing operator
  $b = $b ?? 0; // Use null coalescing operator
  return $a + $b; 
}