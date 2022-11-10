function formSubmit(url, data, methodType) {
    $.ajax({
        type: methodType,
        url: url,
        data: data,
        success: function (data) {
            swal(data, "success").then(()=>{
                location.reload()
            })
        },
        error: function (data) {
            swal({
                title: "Error!",
                text: "Something gone error!",
                icon: "error",
            });
        }
    });
}


