$(document).ready(function () {
    loadTable();
    Login();
    singup();
    insert();
    update();
    delet();
});

function loadTable() {
    $("#loadTable").load('PHP/loadTable.php');
}

function Login() {
    $(document).on('click', '.login', function () {
        $.validator.setDefaults({
            submitHandler: function () {
                $.ajax({
                    url: 'PHP/login.php',
                    type: 'post',
                    data: $("#loginForm").serialize(),

                    success: function (msg) {

                        msg = msg.trim();

                        if (msg === 'admin') {
                            document.location.href = 'admin.php';
                        }
                        else if (msg === 'user') {
                            document.location.href = 'user.php';
                        }

                        else if(msg === 'Admin disabled your account')
                        {
                            Swal.fire(msg)
                        }

                        else{
                            Swal.fire(msg)
                        }

                    }
                });
            }
        })

        $("#loginForm").validate({
            errorClass: 'error',
            rules: {
                userName: "required",
                password: {
                    required: true,
                    minlength: 5,
                }
            },
            messages: {
                userName: "Pleas Enter Your Name",
                sendEmail: {
                    email: "Please Enter The Valid Email Address",
                    required: "Please Enter Your Email Id"
                },
                password: {
                    required: "Please Enter Your Password",
                    minlength: "Password Length Must be 5"
                },
            }
        })
    });
}

function singup() {
    $(document).on('click', '.singup', function () {

        $.validator.setDefaults({
            submitHandler: function () {
                $.ajax({
                    url: 'PHP/register.php',
                    type: 'post',
                    data: $("#Siform").serialize(),

                    success: function (msg) {

                        msg = msg.trim();

                        if (msg === "New registration successfully Added") {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Your account has been created',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $("#Siform").trigger('reset');
                        }

                        else {
                            Swal.fire(msg)
                        }
                    },
                    error: function (error) {
                        alert(error);
                    }
                });
            }
        })


        $("#Siform").validate({
            errorClass: 'error',
            rules: {
                fullName: "required",
                regNo: "required",
                address: "required",
                nic: "required",
                dob: "required",
                phone: "required",
                gender: "required",
                email: {
                    email: true,
                    required: true
                },
                sendPass: {
                    required: true,
                    minlength: 5
                },
                sendconPass: {
                    required: true,
                    minlength: 5,
                    equalTo: "#sendPass"
                }
            },
            messages: {
                fullName: "Pleas Enter Your Name",
                regNo: "Please Enter Your Reg Number",
                address: "Please Enter Your Address",
                nic: "Enter Your NIC number",
                dob: "Enter Your Date Of Birth",
                phone: "Enter Your Mobile Number",
                gender: "Select Your Gender",
                email: {
                    email: "Please Enter The Valid Email Address",
                    required: "Please Enter Your Email Id"
                },
                sendPass: {
                    required: "Please Enter Your Password",
                    minlength: "Password Length Must be 5"
                },
                sendconPass: {
                    required: "Please Enter Your Confirm Password",
                    minlength: "Password Length Must be 5",
                    equalTo: "Mismatch Password"
                }
            }
        })
    });
}

function insert() {
    $(document).on('click', '.save', function () {
        $.validator.setDefaults({
            submitHandler: function () {
                $.ajax({
                    url: 'PHP/insert.php',
                    type: 'post',
                    data: $("#save").serialize(),

                    success: function (d) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $("#save").trigger('reset');
                        $("#addEmployeeModal").modal('hide');
                        loadTable();
                    }
                });
            }
        })

        $("#save").validate({
            errorClass: 'error',
            rules: {
                name: "required",
                email: {
                    email: true,
                    required: true
                },
                address: "required",
                phone: {
                    required: true,
                    digits: true,
                    maxlength: 10,
                    minlength: 10
                }
            },
            messages: {
                name: "Pleas Enter Your Name",
                email: {
                    email: "<span style='color:red'>Please Enter The Valid Email Address</span>",
                    required: "Please Enter Your Email Id"
                },
                address: "Please Enter Your Address",
                phone: {
                    required: "Please Enter Your Contact number",
                    digits: "Cotact No Must Be numeric",
                    maxlength: "length Must 10",
                    minlength: "length must 10"
                }
            }
        })
    });
}

function update() {
    $(document).on('click', '.provide', function () {
        $.validator.setDefaults({
            submitHandler: function () {
                $.ajax({
                    url: 'PHP/update.php',
                    type: 'post',
                    data: $("#updateForm").serialize(),
                    success: function (d) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Your work has been updated',
                            showConfirmButton: false,
                            timer: 1500
                        })

                        window.location = 'admin.php';
                    }
                });
            }
        })

        $("#updateForm").validate({
            errorClass: 'error',
            rules: {
                userName: "required",
                password: {
                    required: true,
                    minlength: 5
                },
            },
            messages: {
                userName: "Pleas Enter Your User Name",
                password: {
                    required: "Please Enter Your Password",
                    minlength: "Password Length Must be 5"
                },
            }
        })
    });
}

