function page() {
    document.getElementById("main").innerHTML = '<div class="row ">' +
        '<div class="col-sm-4"></div>' +
        '<div class="col-sm-4">' +
        '<form class="form-horizontal">' +
        '<label for="exampleInputPassword1" class="form-label">Current Password</label>' +
        '<div class="mb-3"><input type="password" class="form-control" id="exampleInputPassword0" placeholder="Your Current Password"></div>' +
        '<label for="exampleInputPassword1" class="form-label">New Password</label>' +
        '<div class="mb-3"><input type="password" class="form-control" id="exampleInputPassword1" placeholder="Your New password"></div>' +
        '<label for="exampleInputPassword1" class="form-label">Confirm Password</label>' +
        '<div class="mb-3"><input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm New Password"></div>' +
        '<button type="submit" class="btn btn-sm btn-orange ">Change Password</button>' +
        '<button type="submit" class="btn  btn-danger btn-sm ml-2">Back</button>' +
        '</form>' +
        '</div>' +
        '<div class="col-sm-4"></div>' +
        '</div>';
}

function pass() {
    document.getElementById("main").innerHTML = '<div class="row justify-content-md-center"><div class="col-md-4"><div class="card border-secondary"><div class="card-header bg-dark text-white"><h5 class="card-title">change Password</h5></div><div class="card-body"><form accept-charset="UTF-8" role="form" action="#"><fieldset><div class="form-group"><div class="input-group"><span class="input-group-addon"><i class="fa fa-lock text-secondary mt-2 mr-1" aria-hidden="true" style="font-size:20px;"></i></span><input type="password" placeholder="Current Password" name="password" class="form-control" value=""></div></div><div class="form-group"><div class="input-group"><span class="input-group-addon"><i class="fa fa-lock text-secondary mt-2 mr-1" aria-hidden="true" style="font-size:20px;"></i></span><input type="password" placeholder="New Password" name="password" class="form-control" value=""></div></div><div class="form-group"><div class="input-group"><span class="input-group-addon"><i class="fa fa-lock text-secondary mt-2 mr-1" aria-hidden="true" style="font-size:20px;"></i></span><input type="password" placeholder="Confirm New Password" name="password" class="form-control" value=""></div></div><div class="row"><div class="col"><input class="btn btn-sm btn-dark btn-block ml-3" type="submit" value="Reset Password"></div><div class="col"><a href="index.php" class="btn btn-sm btn-light btn-block">Cancel</a></div></div></fieldset> </form></div></div></div></div>';
}