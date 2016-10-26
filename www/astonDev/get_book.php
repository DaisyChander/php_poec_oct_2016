<?php
    

    if ($book_id != FALSE) { 
        include('db.php');
        
        $query = $db->prepare('SELECT * FROM book WHERE id=:id');
        $query->bindValue(':id', $book_id);
        $result = $query->execute();
        $book = $query->fetch(PDO::FETCH_ASSOC);
    } else {
        $book =  FALSE;
    }

    // var_dump($query->errorInfo());
    // var_dump($query);
    // var_dump($result); 
    // var_dump($book);
?>