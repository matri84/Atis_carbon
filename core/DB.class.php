<?php

namespace core;

use PDO;

class DB
{
     public static function addComment(string $name, string $email, string $message)
     {
          global $conn;
          global $errors;
          global $success;
          $errores = [];
          if (empty($name) or empty($email) or empty($message)) {
               array_push($errores, $errors["required"]);
          }
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               array_push($errores, $errors["email"]);
          }

          if (count($errores) > 0) {
               $_SESSION["comment_errors"] = $errores;
               return false;
          } else {
               $query = "INSERT INTO comment (name,email,message) VALUES (:name,:email,:message)";
               $do = $conn->prepare($query);
               $do->bindParam(":name", $name);
               $do->bindParam(":email", $email);
               $do->bindParam(":message", $message);
               if ($do->execute()) {
                    $_SESSION["true_comment"] = $success["comment"];
                    return true;
               } else {
                    $_SESSION["addComment"] = $errors["addComment"];
                    return false;
               }
          }
     }

     public static function get(string $table,$number = null): array{
          global $conn;
          $query = "SELECT * FROM $table";
          if ($number !== null) {
               $query .= " LIMIT " . (int) $number;
          }
          $do = $conn->prepare($query);
          $do->execute();
          $results = $do->fetchAll(PDO::FETCH_ASSOC);
          if (count($results) > 0) {
               return $results;
          } else {
               return ["error" => "این اطلاعات وجود ندارد"];
          }
     }

     public static function getBySlug(string $table,string $slug){
          global $conn;
          $query = "SELECT * FROM $table WHERE slug = :slug";
          $do = $conn->prepare($query);
          $do->bindParam(":slug",$slug);
          $do->execute();
          $result = $do->fetch(PDO::FETCH_ASSOC);
               return $result;
     }
}