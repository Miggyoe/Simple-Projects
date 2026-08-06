<?php


include 'data.php'; // connect to your data

if (!isset($_GET['uid'])) {
    echo "No user selected!";
    exit;
}

$uid = $_GET['uid'];
$user = null;

// find the correct user
foreach ($users as $u) {
    if ($u['id'] == $uid) {
        $user = $u;
        break;
    }
}

// if not found
if (!$user) {
    echo "User not found!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

body {
  background: #f4f6f8;
}

.top-section {
  display: flex;
  justify-content: space-between;
  background: #189771;
  color: white;
  align-items: center;
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}

.top-section-left {
  display: flex;
  align-items: center;
  padding-left: 0.5px;
}

.top-section-right {
  display: flex;
  align-items: center;
  padding-right: 1.5rem;
}

.container {
  width: 80%;
  margin: 30px auto;
}

.profile-card {
  background: white;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.cover {
  height: 150px;
  background-size: cover;
  background-position: center;
}

.profile-info {
  padding: 20px;
  position: relative;
}

.avatar {
  width: 90px;
  height: 90px;
  border-radius: 50%;
  border: 4px solid white;
  position: absolute;
  top: -45px;
  left: 20px;
  object-fit: cover;
}

.profile-info h2 {
  margin-top: 50px;
}

.email {
  color: gray;
  font-size: 14px;
  margin: 5px 0;
}

.bio {
  margin: 10px 0;
  color: #555;
}

.stats {
  display: flex;
  gap: 30px;
  margin-top: 10px;
}

.content {
  display: flex;
  gap: 20px;
  margin-top: 20px;
}

.posts {
  flex: 2;
}

.post {
  background: white;
  padding: 15px;
  margin-bottom: 15px;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.post-header {
  display: flex;
  align-items: center;
  gap: 10px;
}

.post-header img {
  border-radius: 50%;
}

.post p {
  margin: 10px 0;
}

.comment {
  color: #555;
  font-size: 14px;
}

.photos {
  flex: 1;
}

.photo-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
}

.photo-grid img {
  width: 100%;
  border-radius: 8px;
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


  <div class="container">
  <!-- PROFILE HEADER -->
  <div class="profile-card">
    <div class="cover" style="background-image: url('<?php echo $user['coverphoto']; ?>');"></div>
    <div class="profile-info">
      <img src="<?php echo $user['pfp']; ?>" class="avatar">
      <h2><?php echo $user['name']; ?></h2>
      <p class="email">📧 <?php echo $user['email']; ?></p>
      <p class="bio"><?php echo $user['bio']; ?></p>
      
        <div class="stats">
        <div><strong><?php echo count($user['photos']); ?></strong><br>Photos</div>
        <div><strong><?php echo count($user['posts']); ?></strong><br>Posts</div>
      </div>
    </div>
  </div>

  <!-- MAIN CONTENT -->
  <div class="content">
  <!-- POSTS -->
  <div class="posts">
    <h3>Posts</h3>
    <?php if (!empty($user['posts'])): ?>
         <?php foreach ($user['posts'] as $post): ?>
            <div class="post">
                <div class="post-header">
                     <img src="<?php echo htmlspecialchars($user['pfp']); ?>" width="40" height="40">
                     <div>
                         <strong><?php echo htmlspecialchars($user['name']); ?></strong><br>
                         <small><?php echo htmlspecialchars($post['timestamp']); ?></small>
                    </div>
                </div>
                <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                <span class="comment">💬 Comment</span>
             </div>
        <?php endforeach; ?>
     <?php else: ?>
    <p>No posts yet.</p> <!-- Message for users with no posts -->
    <?php endif; ?>
    </div>

  <!-- PHOTOS -->
  <div class="photos">
    <h3>Photos</h3>
        <div class="photo-grid">
            <?php foreach ($user['photos'] as $index => $photoPath): ?>
            <img src="<?php echo htmlspecialchars($photoPath); ?>" alt="User Photo <?php echo $index + 1; ?>">
            <?php endforeach; ?>
        </div>
  </div>
  
  </div>
</div>

</body>
</html>