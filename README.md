# Roman-to-Integer

Class that's converts Roman to Integer


## Roman values

#### Symbol    Value
- I             1
- V             5
- X             10
- L             50
- C             100
- D             500
- M             1000

- I can be placed before V (5) and X (10) to make 4 and 9. 
- X can be placed before L (50) and C (100) to make 40 and 90. 
- C can be placed before D (500) and M (1000) to make 400 and 900.

## Example 1:

Input: s = "III"<br />
Output: 3 <br />
Explanation: III = 3.

## Example 2:

Input: s = "LVIII"<br />
Output: 58 <br />
Explanation: L = 50, V= 5, III = 3.

## Example 3:

Input: s = "MCMXCIV"<br />
Output: 1994 <br />
Explanation: M = 1000, CM = 900, XC = 90 and IV = 4.

## Constraints:

- 1 <= s.length <= 15
- s contains only the characters ('I', 'V', 'X', 'L', 'C', 'D', 'M').
- It is guaranteed that s is a valid roman numeral in the range [1, 3999].


## License
[MIT](https://choosealicense.com/licenses/mit/)
