<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{
    public function getUser(string $email, string $password): ?User
    {
        try {
            $conn = $this->database->connect();

            $stmt = $conn->prepare('
                SELECT * FROM public.users WHERE email = :email
            ');
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user === false) {
                // User with the given email not found
                return null;
            }

            // Verify the password using password_verify
            if (password_verify($password, $user['password_'])) {
                // Password is correct, return a User object
                return new User(
                    $user['username'],
                    $user['email'],
                    $user['password_']
                );
            } else {
                // Incorrect password
                return null;
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
            throw $e;
        } catch (Exception $e) {
            error_log($e->getMessage());
            throw $e;
        }
    }

    public function userExists(string $email): bool {
        $stmt = $this->database->connect()->prepare('SELECT * FROM public.users WHERE email = :email');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC) !== false;
    }

    public function addUser(User $user): void
    {
        try {
            $conn = $this->database->connect();

            // Hash the password
            $hashedPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);

            // Prepare the SQL query
            $stmt = $conn->prepare('
                INSERT INTO public.users (username, email, password_)
                VALUES (:username, :email, :password)
            ');

            // Bind values to the query, protecting against SQL Injection
            $stmt->bindParam(':username', $user->getUserName(), PDO::PARAM_STR);
            $stmt->bindParam(':email', $user->getEmail(), PDO::PARAM_STR);
            $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);

            // Execute the query
            $stmt->execute();
        } catch (PDOException $e) {
            error_log($e->getMessage());
            throw $e;
        } catch (Exception $e) {
            error_log($e->getMessage());
            throw $e;
        }
    }
}
