<?php
namespace App\classes;

class User
{
    public $users = [], $email, $password, $message;

    public function __construct($post = null)
    {
        $this->email = $post['email'];
        $this->password = $post['password'];

        $this->users = [
            0 => [
                'id' => 1,
                'name' => 'Arman Afridi',
                'email' => 'armanafridi@gmail.com',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dicta distinctio in inventore ipsum magnam porro quisquam rem sequi ullam.',
                'password' => 'adsfafsa558__@',
                'image' => 'assets/img/arman-afridi.png'
            ],
            1 => [
                'id' => 2,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dicta distinctio in inventore ipsum magnam porro quisquam rem sequi ullam.',
                'password' => '111111',
                'image' => 'assets/img/profile/no-profile.png'
            ],
        ];
    }

    public function login()
    {
        foreach ($this->users as $user)
        {
            if($user['email'] == $this->email && $user['password'] == $this->password)
            {
                session_start();
                $_SESSION['id'] = session_id();
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['description'] = $user['description'];
                $_SESSION['image'] = $user['image'];
                header("Location: action.php?page=home");
            }
        }
        header("Location: action.php?page=home");
    }
}