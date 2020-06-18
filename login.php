
  <link rel="stylesheet"href="<?php echo ASSET; ?>css/login.css">
  
  <div class="con" align="center">
    <div class="tamp">
    <h1>LOGIN FIRST</h1>
    <form action="login_proses.php" method="POST">
      <table>
        <tr><td><input type="text" name="user_email" placeholder="EMAIL"></td></tr>
        
        <tr><td><input type="text" name="user_password" placeholder="PASSWORD"></td></tr>
       </table>

       <div class="tombol">
         <input type="submit" name="submit" value="LOGIN">
       </div>
       <p><span>created by mil</span></p>
      
    </form>
    </div>
  </div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');

h1 {
  font-family: 'Oswald', sans-serif;
}

h2{
  font-family: 'Quicksand', sans-serif;
}

</style>
     