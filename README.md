# -_POSTARRAY
Helps to Parse multidimensional arrays sent via $_POST correctly.

When parsing the $_POST array, PHP tends to have problems parsing multidimensional arrays whose names have spaces e.g name[bestbrain 10] so, this project parses the php raw input stream directly and arranges any matches into multidimensional arrays


## Example


#### form.html
```html
<form method="post">
  <input name="dimension[head]" />
  <input name="dimension[shoulder]" />
  <input name="dimension[waist to heels]" />
  <input name="dimension[burst to breast]" />
  <button>Submit</button>
</form>
```

### submit.php
```php
<?php
  require_once('index.php');
  echo "<pre>";
  print_r($_POST);//before
  $_POST = parsePost(file_get_contents('php://input'));
  print_r($_POST);//after parsing
```
