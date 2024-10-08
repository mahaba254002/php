# php
## Data Types
1. Strings
- In PHP, string literals can be specified in four different ways: single-quoted, double-quoted, heredoc syntax, and nowdoc syntax. 

### **Single-Quoted Strings**

- Single-quoted strings are the simplest form of string in PHP. When you define a string using single quotes, the content inside the quotes is taken literally, with only two special characters being recognized: the backslash (`\`) and the single quote itself.

#### **Characteristics of Single-Quoted Strings:**

1. **Literal Interpretation:**
   - Everything inside the single quotes is treated as a literal string. This means that variables, escape sequences (other than `\\` and `\'`), and special characters will not be processed or interpolated.

   Example:
   ```php
   $name = 'John';
   $string = 'Hello, $name!'; // Output: Hello, $name!


### **Double-Quoted Strings**

- Double-quoted strings in PHP are more powerful than single-quoted strings because they allow for variable interpolation and interpretation of special characters. This makes them useful for cases where you need to include dynamic content or special formatting within a string.
- Special characters
![Special characters](escape_chars.png)



#### **Characteristics of Double-Quoted Strings:**

1. **Variable Interpolation:**
   - Variables within a double-quoted string are evaluated and replaced with their corresponding values.

   Example:
   ```php
   $name = 'John';
   $string = "Hello, $name!"; // Output: Hello, John! 
   ```
   ### Regular Expressions
1. preg_match(): Searches a string for a match to a regular expression. Case sensitivity depends on the pattern (/pattern/ for case-sensitive and /pattern/i for case-insensitive).
2. preg_replace(): Searches a string for matches to a regular expression and replaces them with a new string.
3. preg_split(): Splits a string by a regular expression, returning an array of substrings.


   #### Uses
   - Input validation
   - Verifying input format like mails
   - Parsing data from predefined variables
   - Search and replace data

   #### Symbols used
   1. ^ start with "^mahaba" starts with mahaba
   2. $ ends with "mahaba$" ends with mahaba
   3. * occur 0 or more. "sh*" has s followed by 0 or more h
   4. + occur 1 or more. sh+
   5. ? 0 or one. sh?
   6. {} indicate range "sh{2}"start with s and has exactly 2 h ."sh{2,}" start with s and has atleast 2 h. "sh{2,5}" not more than 5 h.
   7. .  stands for single character "s.[0-9]" has s and followed by any one character further followed by digit. sh3
   8. [] Specify which chars are allowed in single position. 