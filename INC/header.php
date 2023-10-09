<nav class="navbar navbar-expand-lg navbar-light bg-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">FM HOTEL</a>
    <button class="navbar-toggler shadow-non" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
        <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
        <a class="nav-link me-2" href="contact.php">Contact us</a>
        </li>
        <li class="nav-item">
        <a class="nav-link me-2" href="about.php">About</a>
        </li>
    </ul>
    <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginmodal">
        Login
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registermodal">
        Register
        </button>
    </div> 
    </div>
</div>
</nav>



<div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
        <i class="bi bi-person-circle fs-3 me-2"></i>
            User Login
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control shadow-none">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">I Agree with all the terms and condittions</label>
        </div>
        <div class="d-flex align-items-center justify-content-between">
            <button type="submit" class="btn btn-dark">LOGIN</button>
            <a href="javascript: void(0)">Forgot password?</a>
        </div>
        </div>
    </form>
    </div>
</div>  
</div>

<div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form method="POST" action="signup_validate.php">
        <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
        <i class="bi bi-person-lines-fill fs-3 me-2"></i>
            New Registration
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base ">Note:The details you fill must match with your I'D(Aadharcard/driving liscence/passport,etc)
        which will be asked during check-in.</span>
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-6 ps-0">
            <label class="form-label">Name</label>
                <input type="text" class="col-md-6 ps-0" name="name" id="name" class="form-control shadow-none" required>
            </div>
            <div class="col-md-6 ps-0">
                <label class="form-label">Email address</label>
                <input type="email" class="col-md-6 ps-0" name="emailaddress" id="emailaddress" class="form-control shadow-none" required>
            </div>
            <div class="col-md-6 ps-0">
                <label class="form-label">Mobile number</label>
                <input type="number" name="phone" id="phone" class="form-control shadow-none" required>
            </div>
            <div class="col-md-6 ps-0">
                <label class="form-label">Photo</label>
                <input type="file" name="photo" id="photo" class="form-control shadow-none" required>
            </div>
            <div class="col-md-12 ps-0">
                <label class="form-label">Address</label>
                <textarea class="form-control shadow-none" name="address" id="address" rows="1"></textarea>
            </div>
            <div class="col-md-6 ps-0">
                <label class="form-label">Pincode</label>
                <input type="number" name="pincode" id="pincode" class="form-control shadow-none" required>
            </div>
            <div class="col-md-6 ps-0">
                <label class="form-label">DOB</label>
                <input type="date" name="dob" id="dob" class="form-control shadow-none" required>
            </div>
            <div class="col-md-6 ps-0">
                <label class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control shadow-none" required>
            </div>
            <div class="col-md-6 ps-0">
                <label class="form-label">Confirm password</label>
                <input type="password" name="isverified" id="isverified" class="form-control shadow-none" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" checked item="agree item" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">I Agree with all the terms and condittions</label>
            </div> 
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-dark">REGISTER</button>
        </div>
        </div>
    </form>
    </div>
</div>  
</div>

