<?php
    include 'data.php';
    $users = array();

    $user1 = array(
        "id" => "1",
        "name" => "Ethan Miguel P. Patio",
        "bio" => "ano kasi yon pri?...",
        "email" => "ethan1234567@gmail.com",
        "pfp" => "../pictures/pfp/ethanpfp.png",
        "coverphoto" => "../pictures/cover/ethancover.jpg",
        "photos" => ["1photo","2photo","3photo","4photo"]
        /*comments still optional*/
    );
    $user2 = array(
        "id" => "2",
        "name" => "Kristianelle P. Guevarra",
        "bio" => "wazzaaaaaaa mah neyborrrr",
        "email" => "kristianelle21@gmail.com",
        "pfp" => "../pictures/pfp/krispfp.png",
        "coverphoto" => "../pictures/cover/kriscover.jpg",
        "photos" => ["1photo","2photo","3photo","4photo"]
        /*comments still optional*/
    );
    $user3 = array(
        "id" => "3",
        "name" => "Clarence D. Talanay",
        "bio" => "Wag moko awayin, boxingin kita",
        "email" => "clarence456@gmail.com",
        "pfp" => "../pictures/pfp/clapfp.jpg",
        "coverphoto" => "../pictures/cover/clacover.jpg",
        "photos" => ["1photo","2photo","3photo","4photo"]
        /*comments still optional*/
    );
    $user4 = array(
        "id" => "4",
        "name" => "Renz Lui B. Rivera",
        "bio" => "Hoy, Hoy, Buloyyyyyyyyyyyy:)))",
        "email" => "renzluiboi@gmail.com",
        "pfp" => "../pictures/pfp/renzpfp.png",
        "coverphoto" => "../pictures/cover/renzcover.jpg",
        "photos" => ["1photo","2photo","3photo","4photo"]
        /*comments still optional*/
    );
    $user5 = array(
        "id" => "5",
        "name" => "Christian F. De leon",
        "bio" => "Yung kalbo pa talaga",
        "email" => "christianDeleon@gmail.com",
        "pfp" => "../pictures/pfp/christpfp.png",
        "coverphoto" => "../pictures/cover/chriscover.jpg",
        "photos" => ["1photo","2photo","3photo","4photo"]
        /*comments still optional*/
    );
    $user6 = array(
        "id" => "6",
        "name" => "Justin Rey Manganti",
        "bio" => "ARRAY MOOO PAKAKKK!",
        "email" => "mangantiJustin@gmail.com",
        "pfp" => "../pictures/pfp/juspfp.png",
        "coverphoto" => "../pictures/cover/juscover.jpg",
        "photos" => ["1photo","2photo","3photo","4photo"]
        /*comments still optional*/
    );
    $user7 = array(
        "id" => "7",
        "name" => "John David Mendoza",
        "bio" => "CODING, SARAPPPP!!!!!",
        "email" => "JDMendoza@gmail.com",
        "pfp" => "../pictures/pfp/jdpfp.png",
        "coverphoto" => "../pictures/cover/jdcover.jpg",
        "photos" => ["1photo","2photo","3photo","4photo"]
        /*comments still optional*/
    );
    $user8 = array(
        "id" => "8",
        "name" => "Vince Palo Frias",
        "bio" => "six, seven, eight, nein! lezgo coding",
        "email" => "beansbatumbakal@gmail.com",
        "pfp" => "../pictures/pfp/vincepfp.jpg",
        "coverphoto" => "../pictures/cover/vincecover.jpg",
        "photos" => ["1photo","2photo","3photo","4photo"]
        /*comments still optional*/
    );
    array_push(
        $users, 
        $user1, 
        $user2, 
        $user3, 
        $user4, 
        $user5, 
        $user6, 
        $user7,
        $user8
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<style>
    .card{
        background: white;
        border-radius: 25px;
        overflow: hidden;
        text-decoration: none;
    }
    .profile-img{
        width: 100px;
        height: 100px;
        border-radius: 100%;
        border: 4px solid white;
        margin-top: -50px;
        object-fit: cover;
    }
    .top-section{
        display: flex;
        justify-content: space-between;
        background: #189771;
        color: white;
        align-items:center;
        padding-top:1.5rem;
        padding-bottom:1.5rem;
    }
    .top-section-left{
        display: flex;
        align-items: center;
        padding-left:0.5px;
    }
    .top-section-right{
        display: flex;
        align-items: center;
        padding-right:1.5rem;
    }
    .main-section{
        padding:1.5rem;
        padding-bottom:5px;
    }
    .grid{
        display: grid;
        gap: 1.5rem;
        padding:1.5rem;
        padding-top:1rem;
    }
    .grid-home {
        grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
    }
</style>
<body>
<!--TOP SECTION-->
    <div class="top-section">
        <div class="top-section-left">
            <img src="../pictures/logo/logo.png" alt="logo" style="height:100px; width: 200px;">
            <h1>Page Buddies</h1>
        </div>
        <div class="top-section-right"><a href="homepage.php" style="color: white"><h2>Home</h2></a></div>
    </div>

<!--MAIN SECTION-->
    <div class="main-section">
        <h3>Discover People and Friends</h3>
        <p>Connect with other people around the world</p>
    </div>

<!--CARD SECTION-->
    <div class="grid grid-home">
        <?php foreach ($users as $user): ?>
            <a href="profile.php?uid=<?php echo $user['id']; ?>" class="card">
                <div class="cover-sm">
                    <img src="<?php echo $user['coverphoto']; ?>" style="width: 100%; height: 120px; object-fit:cover;">
                </div>
                <div style="padding: 0 1.5rem 1.5rem 1.5rem; text-align:center;">
                    <img src="<?php echo $user['pfp']; ?>" class="profile-img">
                    <h3><?php echo $user['name']; ?></h3>
                    <p style="font-size:0.875rem; color:#4b5563;"><?php echo $user['email']; ?></p>
                    <p style="font-size:0.875rem; color:#374151;"><?php echo $user['bio']; ?></p>
                    <div class="photos">
                        <div><small>Photos</small><div><?php echo count ($user['photos']); ?></div></div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</body>
</html>