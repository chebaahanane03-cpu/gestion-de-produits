<?php
function getAllUsers($pdo){
    // cette functions se connecte ala basse de donnée et returne all users sous forme d'un array
    $sql = "SELECT * from users";
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $users;
}
function filltreUsersByRole($pdo, $role){
    $sql="SELECT * from users where role=?";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$role]);
    return $stmt->fetchall();
} 
function filltreUserByActive($pdo, $active){
    $sql="SELECT * from users where active=?";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$active]);
    return $stmt->fetchall();
}