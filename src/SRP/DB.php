<?php

    namespace SRP;

    use SRP\User;

    class DB {

        public function store(User $user)
        {
            echo "User " . $user->getName() . " inserted successfully!";
        }
    }
