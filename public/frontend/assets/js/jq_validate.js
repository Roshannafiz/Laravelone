$().ready(function () {

    // validate Register form on keyup and submit
    $("#RegisterForm").validate({
        rules: {
            name: "required",
            country: "required",
            city: "required",
            address: "required",
            state: "required",
            pincode: "required",
            email: {
                required: true,
                email: true,
                remote: "check-email"
            },
            mobile: {
                required: true,
                minlength: 11,
                maxlength: 11,
            },
            password: {
                required: true,
                minlength: 8
            },

            agree: "required"
        },

        messages: {
            name: "Please enter your firstname",
            address: "Please enter your address",
            state: "Please enter your state",
            pincode: "Please enter your pincode",
            email: {
                required: "Please entr your email",
                email: "Please enter a valid email",
                remote: "Email already exists"
            },
            mobile: {
                required: "Please enter your mobile",
                minlength: "Your mobile must be 11 characters",
                minlength: "Your mobile must be 11 characters",
            },
            country: "Please enter your country",
            city: "Please enter your city",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters"
            },
        }

    });


    // validate Login form on keyup and submit
    $("#LoginForm").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 8
            },
            agree: "required"
        },

        messages: {
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email",
            },
            password: {
                required: "Please enter your password",
                minlength: "Your password must be at least 8 characters"
            },
        }

    });

});
