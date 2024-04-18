<?php
class User{
    public $name = "";
    public $level = "";
    public $filename = "logs.txt";
    
    public function __destruct(){
        file_put_contents(__DIR__ . "/" . $this->filename, request, FILE_APPEND);
        
        echo "Thanks You for Using the best NoteKepper!!";
    }
}

$notes = array(
    array(
        "id" => 1,
        "title" => "First Note",
        "author" => "admin",
        "content" => "This is the content of the first note."
    ),
    array(
        "id" => 2,
        "title" => "Second Note",
        "author" => "user",
        "content" => "This is the content of the second note."
    ),
    array(
        "id" => 3,
        "title" => "Third Note",
        "author" => "john",
        "content" => "This is the content of the third note."
    )
);

if (isset($_COOKIE['user_token'])) {
    $token = $_COOKIE['user_token'];
    $decoded = base64_decode($token);
    $usr = unserialize($decoded);

    // Now you can access $usr->name and $usr->level
    echo "Welcome back, " . $usr->name . "! Your level is: " . $usr->level;
} else {
    echo "Token not found. User not authenticated.";
}
?>