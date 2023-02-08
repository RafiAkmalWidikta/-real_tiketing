<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
            <img src="<?= BASEURL ?>/img/traveling.png" alt="" width="50%">
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">L O G I N</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control form-control-user"
                        id="exampleInputEmail"
                        aria-describedby="emailHelp"
                        placeholder="Masukan email anda"
                      />
                    </div>
                    <div class="form-group">
                      <input
                        type="password"
                        class="form-control form-control-user"
                        id="exampleInputPassword"
                        placeholder="Masukan password anda"
                      />
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input
                          type="checkbox"
                          class="custom-control-input"
                          id="customCheck"
                        />
                      </div>
                    </div>
                    <a
                      href=""
                      class="btn btn-primary btn-user btn-block"
                    >
                      Login
                    </a>
                    <hr />
                  </form>
                  <hr />
                  <div class="text-center">
                    <a class="small" href="<?= BASEURL?>/auth/register">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
