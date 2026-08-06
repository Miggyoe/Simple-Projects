<?php
    $users = array(); // Initialize the array

    $user1 = array(
        "id" => "1",
        "name" => "Ethan Miguel P. Patio",
        "bio" => "ano kasi yon pri?...",
        "email" => "ethan1234567@gmail.com",
        "pfp" => "../pictures/pfp/ethanpfp.png",
        "coverphoto" => "../pictures/cover/ethancover.jpg",
        "photos" => ["../pictures/photos/ethanphotos/1photo.jpg",
                    "../pictures/photos/ethanphotos/2photo.jpg",
                    "../pictures/photos/ethanphotos/3photo.jpg",
                    "../pictures/photos/ethanphotos/4photo.jpg"],
        "posts" => [
            [
                "content" => "Ganda nya hays",
                "timestamp" => "Just now"
            ],
            [
                "content" => "Ey ascendant",
                "timestamp" => "3d ago"
            ]
        ]
    );
    $users[] = $user1; // Add user1 to the array

    $user2 = array(
        "id" => "2",
        "name" => "Kristianelle P. Guevarra",
        "bio" => "wazzaaaaaaa mah neyborrrr",
        "email" => "kristianelle21@gmail.com",
        "pfp" => "../pictures/pfp/krispfp.png",
        "coverphoto" => "../pictures/cover/kriscover.jpg",
        "photos" => ["../pictures/photos/krisphotos/1photo.jpg",
                    "../pictures/photos/krisphotos/2photo.jpg",
                    "../pictures/photos/krisphotos/3photo.jpg",
                    "../pictures/photos/krisphotos/4photo.jpg"
                    ],
        "posts" => [
            [
                "content" => "Dili ako man bisaya dong",
                "timestamp" => "Just now"
            ],
        ]                    
    );
    $users[] = $user2; // Add user2 to the array

    $user3 = array(
        "id" => "3", // Changed ID to be unique
        "name" => "Clarence D. Talanay",
        "bio" => "Wag moko awayin, boxingin kita",
        "email" => "clarence456@gmail.com",
        "pfp" => "../pictures/pfp/clapfp.jpg",
        "coverphoto" => "../pictures/cover/clacover.jpg",
        "photos" => ["../pictures/photos/claphotos/1photo.jpg",
                    "../pictures/photos/claphotos/2photo.jpg",
                    "../pictures/photos/claphotos/3photo.jpg",
                    "../pictures/photos/claphotos/4photo.jpg"
                    ],
        "posts" => [
            [
                "content" => "Jackpot!",
                "timestamp" => "Just now"
            ],
            [
                "content" => "Goodnight...",
                "timestamp" => "1d ago"
            ]
        ]   
    );
    $users[] = $user3; // Add user3 to the array

    $user4 = array(
        "id" => "4",
        "name" => "Renz Lui B. Rivera",
        "bio" => "Hoy, Hoy, Buloyyyyyyyyyyyy:)))",
        "email" => "renzluiboi@gmail.com",
        "pfp" => "../pictures/pfp/renzpfp.png",
        "coverphoto" => "../pictures/cover/renzcover.jpg",
        "photos" => ["../pictures/photos/renzphotos/1photo.jpg",
                    "../pictures/photos/renzphotos/2photo.jpg",
                    "../pictures/photos/renzphotos/3photo.jpg",
                    "../pictures/photos/renzphotos/4photo.jpg"
                    ],
        "posts" => [
            [
                "content" => "Usagiiii",
                "timestamp" => "4 hours ago"
            ],
            [
                "content" => "Sodapop",
                "timestamp" => "9 months ago"
            ]
        ]   
    );
    $users[] = $user4; // Add user4 to the array

    $user5 = array(
        "id" => "5",
        "name" => "Christian F. De leon",
        "bio" => "Yung kalbo pa talaga",
        "email" => "christianDeleon@gmail.com",
        "pfp" => "../pictures/pfp/christpfp.png",
        "coverphoto" => "../pictures/cover/chriscover.jpg",
        "photos" => ["../pictures/photos/chrisphotos/1photo.jpg",
                    "../pictures/photos/chrisphotos/2photo.jpg",
                    "../pictures/photos/chrisphotos/3photo.jpg",
                    "../pictures/photos/chrisphotos/4photo.jpg"
                    ],
        "posts" => [
            [
                "content" => "Ni hao",
                "timestamp" => "Just now"
            ],
            [
                "content" => "sapdfasdjhelloaspnu",
                "timestamp" => "1d ago"
            ]
        ]   
    );
    $users[] = $user5; // Add user5 to the array

    $user6 = array(
        "id" => "6",
        "name" => "Justin Rey Manganti",
        "bio" => "ARRAY MOOO PAKAKKK!",
        "email" => "mangantiJustin@gmail.com",
        "pfp" => "../pictures/pfp/juspfp.png",
        "coverphoto" => "../pictures/cover/juscover.jpg",
        "photos" => ["../pictures/photos/jusphotos/1photo.jpg",
                    "../pictures/photos/jusphotos/2photo.jpg",
                    "../pictures/photos/jusphotos/3photo.jpg",
                    "../pictures/photos/jusphotos/4photo.jpg"
                    ],
        "posts" => [
            [
                "content" => "Hawak mo ang beat",
                "timestamp" => "3h ago"
            ],
            [
                "content" => "You deserve better",
                "timestamp" => "20d ago"
            ]
        ]   
    );
    $users[] = $user6; // Add user6 to the array

    $user7 = array(
        "id" => "7",
        "name" => "John David Mendoza",
        "bio" => "CODING, SARAPPPP!!!!!",
        "email" => "JDMendoza@gmail.com",
        "pfp" => "../pictures/pfp/jdpfp.png",
        "coverphoto" => "../pictures/cover/jdcover.jpg",
        "photos" => ["../pictures/photos/jdphotos/1photo.jpg",
                    "../pictures/photos/jdphotos/2photo.jpg",
                    "../pictures/photos/jdphotos/3photo.jpg",
                    "../pictures/photos/jdphotos/4photo.jpg"
                    ],
        "posts" => [
            [
                "content" => "talap talap",
                "timestamp" => "2h ago"
            ],
            [
                "content" => "ayayy",
                "timestamp" => "4h ago"
            ]
        ]   
    );
    $users[] = $user7; // Add user7 to the array

    $user8 = array(
        "id" => "8",
        "name" => "Vince Palo Frias",
        "bio" => "six, seven, eight, nein! lezgo coding",
        "email" => "beansbatumbakal@gmail.com",
        "pfp" => "../pictures/pfp/vincepfp.jpg",
        "coverphoto" => "../pictures/cover/vincecover.jpg",
        "photos" => ["../pictures/photos/vincephotos/1photo.jpg",
                    "../pictures/photos/vincephotos/2photo.jpg",
                    "../pictures/photos/vincephotos/3photo.jpg",
                    "../pictures/photos/vincephotos/4photo.jpg"
                    ],
        "posts" => [
            [
                "content" => "Cheese malunggay pandesal",
                "timestamp" => "1h ago"
            ],
        ]   
    );
    $users[] = $user8; // Add user8 to the array
?>