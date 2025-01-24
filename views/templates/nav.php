

<nav>
    <ul class="nav-left">
        
        <li><a href="home">Home &nbsp; &nbsp;<span class="nav-icons material-icons">home</span></a></li>
        <li><a href="workout">Workout<span class="material-icons">fitness_center</span></a></li>
        <?php if (isLoggedIn() === false): ?>  
            <button class="login-button" onclick="location.href='login'">Login</button>
        <?php else: ?>  
          <a class="logout-btn" href="logout"><buttton class="logout-button">logout</buttton></a>   
        <?php endif; ?>
</nav>