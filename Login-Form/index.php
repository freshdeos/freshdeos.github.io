<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="login.php" method="post" class="form-container" >
    <h2>Register Now</h2>

    <div class="form-group">
      <label for="fullname">Full Name</label>
      <input type="text" name="fullname" placeholder="Enter your full name" required>
    </div>

    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" name="email" placeholder="Enter your email" required>
    </div>

    <div class="form-group">
      <label for="phone">Phone Number</label>
      <input type="tel" name="phone" placeholder="Enter your phone number" required>
    </div>

    <div class="form-group">
      <label for="dob">Date of Birth</label>
      <input type="date" name="dob" required>
    </div>

    <div class="form-group">
      <label for="gender">Gender</label>
      <select name="gender" required>
        <option value="">-- Select --</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
    </div>

    <button type="submit">Submit</button>
  </form>

</body>
</html>