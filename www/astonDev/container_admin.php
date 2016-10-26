<?php
    include('get_all_books.php');
?>

<div class="container main">

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date of Publication</th>
                </tr>
            </thead>
            <tbody>
                // <?php
                //     foreach ($books as $book) {
                //         print '<tr>';
                //         print '<td>' . $book['id'] . '</td>';
                //         print '<td>' . $book['title'] . '</td>';
                //         print '<td>' . $book['author'] . '</td>';
                //         print '<td>' . $book['publish_date'] . '</td>';
                //         print '</tr>';
                //     }
                // ?>

                <?php foreach ($books as $book) : ?>
                    <tr>
                        <td><?php print $book['id']; ?> </td>
                        <td><?php print $book['title']; ?></td>
                        <td><?php print $book['author']; ?></td>
                        <td><?php print date('Y', $book['publish_date'] ); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>