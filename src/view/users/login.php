<section>
  <header><h1 class="page-header">Login</h1></header>
    <form class="login-form" method="post" action="index.php?page=login">
      <input type="hidden" name="action" value="login" />
      <div class="input-container text">
        <label>
          <span class="form-label hidden">Email:</span>
          <input type="email" autocomplete="on" name="email" placeholder="email" class="form-input" required />
        </label>
      </div>
      <div class="input-container text">
        <label>
          <span class="form-label hidden">Password:</span>
          <input type="password" autocomplete="on" name="password" placeholder="password" class="form-input" required />
        </label>
      </div>
      <div class="input-container submit">
         <button type="submit" class="form-submit">Login</button> or <a href="index.php?page=register">Register</a>
      </div>
    </form>
</section>
