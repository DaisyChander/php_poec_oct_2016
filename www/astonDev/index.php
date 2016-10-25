<?php

//practice 1
  
      //   $maVariable = [
      //     0 => 'GOTLIB...',
      //     1 => 'Gotlib (1934....)',
      //     'author' => [
      //       'name' => 'Gotlib',
      //       'birth' => '1954',
      //       'deseased' => FALSE,
      //       ],
      //     'publication' => 1984,
      //   ];

      //   print $maVariable[0];
      //   print $maVariable['publication'];


// practice 2

 $books = [
    [
      'title' => 'GOTLIB...',
      'author' => [
        'name' => 'Gotlib',
        'birth' => '1954',
        'deceased' => FALSE,
        ],
      'publication' => 1986,
      'available' => TRUE,
    ],
    [
      'title' => 'CINEMASTOCK.',
      'author' => [
        'name' => 'Gotlib',
        'birth' => '1954',
        'deceased' => FALSE,
        ],
      'publication' => 2001,
      'available' => FALSE,
    ],
    [
      'title' => 'GAI-LURON OU LA JOIE DE VIVRE',
      'author' => [
        'name' => 'Gotlib',
        'birth' => '1954',
        'deceased' => TRUE,
        ],
      'publication' => 1984,
      'available' => TRUE,
    ],
  ];

  //Practice 1
    // print $books[0]['title';
    // print $books[1]['title'];
    // print $books[2]['title'];
 
  //section
  print '<section>';
  foreach ($books as $book) {
    print '<h2>'. $book['title'] . '</h2>';
    //print '<h2>'. $book['author']['name'] . '</h2>';
    foreach ($book['author'] as $key => $value) {
      //print ucfirst($key) . ' : ' . $value . '<br />' . '<hr />';
      show_author($key, $value);
    };
  }
  print '</section>';


  //aside
  // print '<aside>';
  //   foreach ($books as $key => $value) {
  //     //print '<h2>'. $book['title'] . '</h2>';
  //     $titre = show_title($book['title']);
  //     print $titre;
  //   }

  //   foreach ($books as $key => $value) {
  //     show_publication($book['publication']);
  //   }
  // print '</aside>';

  //functions
  function show_title($title) {
    $markup = print '<h2>'. $title . '</h2>';
    return $markup;
  }

  // function show_author($key, $value) {
  //   print ucfirst($key) . ' : ' . $value . '<hr />';
  // }

  function show_author($key, $value) {

      if ($key == 'deceased' && $value == FALSE) {
        print ucfirst($key) . ' : ' . $value . '<hr />';
      }
     else {
      print ucfirst($key) . ' : ' . $value . '<hr />';
      }
  }

  
 ?>