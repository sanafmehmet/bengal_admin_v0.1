class Notification {
    success(){
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: 'Successfully done',
            timeout: 1000
        }).show();
    }

    add(){
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: 'Successfully Added',
            timeout: 2000
        }).show();
    }

    success_cart(){
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: 'Successfully Added',
            timeout: 2000
        }).show();
    }

    success_cart_remove(){
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: 'Cart Removed Successfully',
            timeout: 2000
        }).show();
    }

    updateProduct(){
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: 'Successfully Updated.',
            timeout: 1000
        }).show();
    }

    sendEmail(){
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: 'Email Sent Successfully.',
            timeout: 1500
        }).show();
    }

    alert(){
        new Noty({
            type: 'alert',
            layout: 'topRight',
            text: 'Are you sure ?',
            timeout: 1000
        }).show();
    }

    error(){
        new Noty({
            type: 'error',
            layout: 'topRight',
            text: 'Something went wrong !',
            timeout: 1000
        }).show();
    }

    warning(){
        new Noty({
            type: 'warning',
            layout: 'topRight',
            text: 'Oops ! wrong',
            timeout: 1000
        }).show();
    }

    salaryWarning(){
        new Noty({
            type: 'warning',
            layout: 'topRight',
            text: 'Salary already paid.',
            timeout: 3000
        }).show();
    }

    image_validation(){
        new Noty({
            type: 'error',
            layout: 'topRight',
            text: 'Upload image less than 1Mb !',
            timeout: 3000
        }).show();
    }
}

export default Notification = new Notification()