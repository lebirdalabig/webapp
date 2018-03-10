<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Building/Cinema Settings</a>
  <a href="#">Movie/Screening Settings</a>
  <a href="#">Transaction Settings</a>
  <a href="#">User Settings</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;> LIST OF BUILDINGS AND THEIR CINEMAS</span>
</div>

<div>
  <div class="container">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Movie ID</th>
            <th>Movie Title</th>
            <th>Movie Description</th>
            <th>Movie Year</th>
            <th>Movie Rating</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $query = "SELECT * FROM movie;";
            
            $res = mysqli_query ($conn,$query);
            
            while($row = mysqli_fetch_assoc($res)){
              echo "<tr>";
              echo "  
                  <td>{$row['movie_id']}</td>
                  <td>{$row['movie_title']}</td>
                  <td>{$row['movie_desc']}</td>
                  <td>{$row['movie_year']}</td> 
                  <td>{$row['movie_rating']}</td>       
              ";
              echo "</tr>";
            }
          
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
     
</body>
</html> 