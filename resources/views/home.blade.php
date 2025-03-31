<!DOCTYPE html>
<html lang="en">
<head>
 
<meta charset="UTF-8">
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<title>Login Page</title>
 
<!-- Bootstrap CSS -->
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
 
<div style="width: 400px;">
 
<h2 class="mb-3">Welcome back</h2>
 
<p class="text-muted mb-4">Please enter your details</p>
 
<form>
 
<div class="mb-3">
 
<label for="email" class="form-label">Email address</label>
 
<input type="email" class="form-control" id="email">
 
</div>
 
<div class="mb-3">
 
<label for="password" class="form-label">Password</label>
 
<input type="password" class="form-control" id="password">
 
</div>
 
<div class="d-flex justify-content-between align-items-center mb-3">
 
<div class="form-check">
 
<input class="form-check-input" type="checkbox" id="remember">
 
<label class="form-check-label" for="remember">
 
Remember for 30 days
 
</label>
 
</div>
 
<a href="/reset-password" class="text-decoration-none">Forgot password?</a>
 
</div>
 
<button type="submit" class="btn btn-primary w-100 mb-2">Sign in</button>
 
<button type="button" class="btn btn-outline-secondary w-100">Sign in with Google</button>
 
</form>
 
<p class="text-center mt-3 text-muted">Don't have an account? <a href="/register" class="text-decoration-none">Sign up</a></p>
 
</div>
 
</div>
 
<!-- Bootstrap JS -->
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

