<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bais | Registration Page</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex justify-content-center align-items-center vh-100 bg-light">

<div style="width: 400px;">

  <h2 class="mb-1">Registration</h2>
  <p class="text-muted mb-4">Fill out the form carefully for registration</p>

  <form method="POST" action="{{ route('register.submit') }}">
    @csrf

    <div class="row mb-3">
      <div class="col">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" name="firstName" id="firstName" required>
      </div>

      <div class="col">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" name="lastName" id="lastName" required>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" required>
      </div>

      <div class="col">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" required>
      </div>
    </div>

    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="licenseAgreement" required>
      <label class="form-check-label" for="licenseAgreement">Accept the license agreement</label>
    </div>

  </form>
<a href="/success" class="btn btn-primary w-100">Sign up</a>
  <p class="text-center mt-3 text-muted">
    Already have an account? 
    <a href="/" class="text-decoration-none">Sign in</a>
  </p>

</div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>