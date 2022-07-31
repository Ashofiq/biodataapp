class Notification{
    success(message){
        Toast.fire({
            icon: 'success',
            title: message
        })
    }

    warning(message){
        Toast.fire({
            icon: 'warning',
            title: message
        })
    }

    error(message){
        Toast.fire({
            icon: 'warning',
            title: message
        })
    }
}

export default Notification = new Notification()