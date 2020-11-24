// 1. Opposite Number:
//      Very simple, given a number, find its opposite.
//      Examples:
//      1: -1
//      14: -14
//      -34: 34
//          Test.assertEquals(opposite(1), -1,)
function opposite(number) {
  //your code here
  return (-number);
}

// 2. Opposites Attract:
//      Timmy & Sarah think they are in love, but around where they live, they will only know once they pick a flower each. If one of the flowers has an even number of petals and the other has an odd number of petals it means they are in love.
//      Write a function that will take the number of petals of each flower and return true if they are in love and false if they aren't.
//          Test.assertEquals(lovefunc(1,4), true)
//          Test.assertEquals(lovefunc(2,2), false)
//          Test.assertEquals(lovefunc(0,1), true)
//          Test.assertEquals(lovefunc(0,0), false)
function lovefunc(flower1, flower2){
  // moment of truth
  var x;
  if(flower1%2==1 && flower2%2==0 || flower1%2==0 && flower2%2==1){
    x=1;
  }
  else x=0;
  return Boolean(x);
}

// 3. Beginner - Reduce but Grow
//      Given a non-empty array of integers, return the result of multiplying the values together in order. Example:
//      [1, 2, 3, 4] => 1 * 2 * 3 * 4 = 24
//          Test.assertEquals(grow([1, 2, 3]), 6);
//          Test.assertEquals(grow([4, 1, 1, 1, 4]), 16); 
//          Test.assertEquals(grow([2, 2, 2, 2, 2, 2]), 64); 
function grow(x){
  var p=1;
  x.forEach(data)
  
  function data(item){
    p*=item;
  }
  return p
}

// 4. Convert to Binary: 
//      Given a non-negative integer n, write a function toBinary/ToBinary which returns that number in a binary format. Example:
//      to_binary(1)  /* should return 1 */
//      to_binary(5)  /* should return 101 */
//      to_binary(11) /* should return 1011 */
//          Test.assertEquals(toBinary(1), 1);
//          Test.assertEquals(toBinary(2), 10);
//          Test.assertEquals(toBinary(3), 11);
//          Test.assertEquals(toBinary(5), 101);
function toBinary(n) {
  const result = n.toString(2);
  var n = parseInt(result);
  return n;
}


// 5. Exclusive "or" (xor) Logical Operator: 
//      In some scripting languages like PHP, there exists a logical operator (e.g. &&, ||, and, or, etc.) called the "Exclusive Or" (hence the name of this Kata). The exclusive or evaluates two booleans. 
//      It then returns true if exactly one of the two expressions are true, false otherwise. For example:
//      false xor false == false // since both are false
//      true xor false == true // exactly one of the two expressions are true
//      false xor true == true // exactly one of the two expressions are true
//      true xor true == false // Both are true.  "xor" only returns true if EXACTLY one of the two expressions evaluate to true.
//          Test.assertEquals(xor(false, false), false, "false xor false === false");
//          Test.assertEquals(xor(true, false), true, "true xor false === true");
//          Test.assertEquals(xor(false, true), true, "false xor true === true");
//          Test.assertEquals(xor(true, true), false, "true xor true === false");
//          Test.assertNotEquals(xor(true, true), true, "'xor' is NOT identical to 'or'");
function xor(a, b) {
  if(a==false && b==false || a==true && b==true){
    return Boolean(0);
  }
  else return Boolean(1);
}


// 6. 5 without numbers !!: 
//      Write a function that always returns 5
//      Sounds easy right? Just bear in mind that you can't use any of the following characters: 0123456789*+-/
//      Good luck :)
//          assert.strictEqual(unusualFive(), 5);
function unusualFive() {
  var txt = "wkwkw";
  return txt.length;
}


// 7. Short Long Short:
//      Given 2 strings, a and b, return a string of the form short+long+short, with the shorter string on the outside and the longer string on the inside. 
//      The strings will not be the same length, but they may be empty ( length 0 ). For example:
//      solution("1", "22") // returns "1221"
//      solution("22", "1") // returns "1221"
//          Test.assertEquals(solution('45', '1'), '1451');
//          Test.assertEquals(solution('13', '200'), '1320013');
//          Test.assertEquals(solution('Soon', 'Me'), 'MeSoonMe');
//          Test.assertEquals(solution('U', 'False'), 'UFalseU');
function solution(a, b){
  if(a.length>b.length)
    return b+a+b;
  else 
    return a+b+a;
}

// 8. Convert a Boolean to a String: 
//      Implement a function which convert the given boolean value into its string representation.
//          Test.assertEquals(booleanToString(true), "true", 'When we pass in true, we want the string "true" as output');
//          Test.assertEquals(booleanToString(false), "false", 'When we pass in false, we want the string "false" as output');
function booleanToString(b){
  let t="true", f="false";
  if(b==true)
    return t;
  else
    return f;
}


// 9. Total amount of points: 
//      Our football team finished the championship. The result of each match look like "x:y". Results of all matches are recorded in the collection.
//      For example: ["3:1", "2:2", "0:1", ...]
//      Write a function that takes such collection and counts the points of our team in the championship. Rules for counting points for each match:
//      if x>y - 3 points
//      if x<y - 0 point
//      if x=y - 1 point
//      Notes:
//      there are 10 matches in the championship
//      0 <= x <= 4
//      0 <= y <= 4
//          Test.assertEquals(points(["1:0","2:0","3:0","4:0","2:1","3:1","4:1","3:2","4:2","4:3"]) , 30);
//          Test.assertEquals(points(["1:1","2:2","3:3","4:4","2:2","3:3","4:4","3:3","4:4","4:4"]) , 10);
//          Test.assertEquals(points(["0:1","0:2","0:3","0:4","1:2","1:3","1:4","2:3","2:4","3:4"]) , 0);
//          Test.assertEquals(points(["1:0","2:0","3:0","4:0","2:1","1:3","1:4","2:3","2:4","3:4"]) , 15);
//          Test.assertEquals(points(["1:0","2:0","3:0","4:4","2:2","3:3","1:4","2:3","2:4","3:4"]) , 12);
function points(games) {
  var t=0;
  games.forEach(total);
  
  function total(item){
    let x = parseInt(item[0]);
    let y = parseInt(item[2]);
    if(x>y)
      t+=3;
    else if(x<y)
      t+=0;
    else
      t+=1;
  }
  return t;
}


// 10. Is he gonna survive?:
//      A hero is on his way to the castle to complete his mission. However, he's been told that the castle is surrounded with a couple of powerful dragons! 
//      each dragon takes 2 bullets to be defeated, our hero has no idea how many bullets he should carry.. 
//      Assuming he's gonna grab a specific given number of bullets and move forward to fight another specific given number of dragons, will he survive?
//      Return True if yes, False otherwise :)
//          Test.assertEquals(hero(10, 5), true);
//          Test.assertEquals(hero(7, 4), false);
//          Test.assertEquals(hero(4, 5), false);
//          Test.assertEquals(hero(100, 40), true);
//          Test.assertEquals(hero(1500, 751), false);
//          Test.assertEquals(hero(0, 1), false);
function hero(bullets, dragons){
  let x=bullets/2;
  if(x>=dragons)
    return true;
  else
    return false;
}
