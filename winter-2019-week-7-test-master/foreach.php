<?php 

// array of books
$books = [
    [
        'author' => 'Milo Yiannopoulos',
        'title' => 'Dangerous',
        'price' => '$15.62'
    ],
    [
        'author' => 'Margaret Atwood',
        'title' => 'The Handmaid\'s Tale',
        'price' => '$8.69'
    ],
    [
        'author' => 'George Orwell',
        'title' => '1984',
        'price' => '$7.09'
    ],
    [
        'author' => 'Rupi Kaur',
        'title' => 'Milk and Honey',
        'price' => '$8.99'
    ],
    [
        'author' => 'Neil Gaiman',
        'title' => 'Norse Mythology',
        'price' => '$15.57'
    ]
];

echo "<table>
            <tr><th>Email</th><th>Name</th><th>LastName</th></tr>";

            foreach($books as $val){
                echo "<tr><td>".$val['author']."</td><td>".$val['title']."</td><td>".$val['price']."</td><td>"</tr>";
            }
echo "</table>";
    