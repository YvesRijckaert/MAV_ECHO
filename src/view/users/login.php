<section id="main">
  <h2 class="page-header form-title">Login</h2>
    <form class="login-form" method="post" action="index.php?page=login">
      <input type="hidden" name="action" value="login" />
      <div class="input-container text">
        <label>
          <span class="form-label hidden">Email</span>
          <input class="info-form-input" type="email" autocomplete="on" name="email" class="form-input" required />
        </label>
      </div>
      <div class="input-container text">
        <label>
          <span class="form-label hidden">Password</span>
          <input class="info-form-input" type="password" autocomplete="on" name="password" class="form-input" required />
        </label>
      </div>
      <label class="info-form-submit submit input-container">
        <input type="submit" name="action" class="info-form-submit-button"  value="done" />
        <svg width="22px" height="16px" viewBox="0 0 22 16">
            <title>Done button</title>
            <desc>Icon for done button.</desc>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-1294.000000, -742.000000)" stroke="#ffffff" stroke-linecap="round" stroke-width="2.4">
                <polyline points="1296 750.267785 1301.81878 756 1314 744"></polyline>
              </g>
            </g>
          </svg>
        <span>Login</span>
      </label>
      <div class="login-register">
        <a href="index.php?page=register">No account? <mark>Register</mark> here!</a>
      </div>
    </form>
</section>
