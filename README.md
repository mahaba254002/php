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
